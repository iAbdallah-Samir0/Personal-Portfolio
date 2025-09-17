const CACHE_NAME = 'Abdallah-portfolio-v1.0.0';
const OFFLINE_URL = '/offline.html';
const urlsToCache = [
    '/',
    '/offline.html',
    OFFLINE_URL,
    '/css/style_home.css',
    '/css/style_portfolio.css',
    '/css/style_resume.css',
    '/css/style_contact.css',
    '/css/style_services.css',
    '/js/home.js',
    '/js/portfolio.js',
    '/js/resume.js',
    '/js/contact.js',
    '/js/services.js',
    '/css/bootstrap.min.css',
    '/js/bootstrap.bundle.min.js',
    '/img/my_portfolio_10.png',
    '/ico/favicon.jpeg',
    '/icons/icon-192x192.png',
    '/icons/icon-512x512.png'
];

// Install Service Worker - Combined approach
self.addEventListener('install', (event) => {
    console.log('Service Worker: Installing...');
    console.log('SW: install');
    self.skipWaiting();

    event.waitUntil((async () => {
        try {
            const cache = await caches.open(CACHE_NAME);
            console.log('Service Worker: Caching files');

            try {
                await cache.addAll(urlsToCache);
                console.log('Service Worker: All files cached successfully');
            } catch (error) {
                console.log('Service Worker: Error caching files with addAll, trying individual approach', error);

                for (const url of urlsToCache) {
                    try {
                        const res = await fetch(url, { cache: 'no-cache' });
                        if (res && res.ok) {
                            await cache.put(url, res.clone());
                        } else {
                            console.warn('SW: Not cached (bad response):', url, res && res.status);
                        }
                    } catch (err) {
                        console.warn('SW: Failed to fetch & cache', url, err);
                    }
                }
            }
        } catch (error) {
            console.log('Service Worker: Error during installation', error);
        }
    })());
});

// Activate Service Worker - Combined approach
self.addEventListener('activate', (event) => {
    console.log('Service Worker: Activating...');
    console.log('SW: activate');

    event.waitUntil((async () => {
        const cacheNames = await caches.keys();

        await Promise.all(
            cacheNames.map((cacheName) => {
                if (cacheName !== CACHE_NAME) {
                    console.log('Service Worker: Deleting old cache', cacheName);
                    return caches.delete(cacheName);
                }
                return null;
            })
        );

        await self.clients.claim();
    })());
});

// Fetch Event Handler - Combined approach
self.addEventListener('fetch', (event) => {
    if (!event.request.url.startsWith('http')) {
        return;
    }

    // Handle navigation requests (HTML pages)
    if (event.request.mode === 'navigate') {
        event.respondWith((async () => {
            const cache = await caches.open(CACHE_NAME);

            // الأول: جرّب من الكاش
            const cached = await caches.match(event.request);
            if (cached) {
                return cached;
            }

            // لو مش موجود: جرّب من الشبكة
            try {
                const networkResponse = await fetch(event.request);
                cache.put(event.request, networkResponse.clone()).catch(() => { });
                return networkResponse;
            } catch (err) {
                // fallback للـ offline.html
                return await caches.match(OFFLINE_URL) || Response.error();
            }
        })());
        return;
    }

    // For other requests (CSS/JS/Images): cache-first then network
    event.respondWith((async () => {
        const cachedResponse = await caches.match(event.request);

        if (cachedResponse) {
            return cachedResponse;
        }

        try {
            const networkResponse = await fetch(event.request);

            if (!networkResponse || networkResponse.status !== 200 || networkResponse.type !== 'basic') {
                return networkResponse;
            }

            const responseToCache = networkResponse.clone();

            if (networkResponse.ok && new URL(event.request.url).origin === location.origin) {
                const cache = await caches.open(CACHE_NAME);
                cache.put(event.request, responseToCache).catch(() => { });
            }

            return networkResponse;
        } catch (error) {
            if (event.request.destination === 'document') {
                const offlineResponse = await caches.match(OFFLINE_URL) || await caches.match('/offline.html');
                return offlineResponse || Response.error();
            }
            return Response.error();
        }
    })());
});

// Processing messages from the home page - Combined approach
self.addEventListener('message', (event) => {
    if (event.data && event.data.type === 'SKIP_WAITING') {
        self.skipWaiting();
    }
});
