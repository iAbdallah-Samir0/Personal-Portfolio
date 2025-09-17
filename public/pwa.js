// Service Worker Registration - Combined from both files
if ('serviceWorker' in navigator) {
    window.addEventListener('load', () => {
        // Register service worker with both possible paths
        navigator.serviceWorker.register('/service-worker.js').then(reg => {
            console.log('SW registered with scope:', reg.scope);

            // Option to activate the new version immediately if installed
            if (reg.waiting) {
                reg.waiting.postMessage({type: 'SKIP_WAITING'});
            }

            reg.addEventListener('updatefound', () => {
                const newSW = reg.installing;
                newSW.addEventListener('statechange', () => {
                    console.log('SW state:', newSW.state);
                    if (newSW.state === 'installed' && navigator.serviceWorker.controller) {
                        // Here you can tell the user that there is a new version.
                        console.log('New SW installed — you may refresh to use new content.');
                        showUpdateNotification();
                    }
                });
            });
        }).catch(err => {
            console.error('SW registration failed:', err);
            // Try alternative service worker path
            navigator.serviceWorker.register('/sw.js')
                .then((registration) => {
                    console.log('PWA: Service Worker registered successfully', registration);

                    // Check for updates
                    registration.addEventListener('updatefound', () => {
                        const newWorker = registration.installing;
                        newWorker.addEventListener('statechange', () => {
                            if (newWorker.state === 'installed' && navigator.serviceWorker.controller) {
                                // Show the user a notification that there is an update.
                                showUpdateNotification();
                            }
                        });
                    });
                })
                .catch((error) => {
                    console.log('PWA: Service Worker registration failed', error);
                });
        });
    });
}

// Show update notification
function showUpdateNotification() {
    const updateBanner = document.createElement('div');
    updateBanner.innerHTML = `
    <div style="
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      background:  #1f242d;
      color: white;
      padding: 15px;
      text-align: center;
      z-index: 9999;
      box-shadow: 0 2px 5px rgba(0,0,0,0.2);
    ">
      <p style="margin: 0; margin-bottom: 10px;">
        An updated version of the site is available.
      </p>
      <button onclick="updateApp()" style="
        background: white;
        color: #2563eb;
        border: none;
        padding: 8px 16px;
        border-radius: 4px;
        cursor: pointer;
        margin-right: 10px;
        font-weight: bold;
      ">
        Update now
      </button>
      <button onclick="dismissUpdate()" style="
        background: transparent;
        color: white;
        border: 1px solid white;
        padding: 8px 16px;
        border-radius: 4px;
        cursor: pointer;
      ">
        Later
      </button>
    </div>
  `;
    document.body.insertBefore(updateBanner, document.body.firstChild);
}

// Update the application
function updateApp() {
    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.getRegistration().then((registration) => {
            if (registration && registration.waiting) {
                registration.waiting.postMessage({ type: 'SKIP_WAITING' });
            } else if (registration) {
                // If no waiting worker, try to update
                registration.update();
            }
            // Remove the banner first
            dismissUpdate();
            // Then reload the page
            setTimeout(() => {
                window.location.reload();
            }, 100);
        }).catch((error) => {
            console.error('Error updating app:', error);
            // Remove the banner and reload anyway
            dismissUpdate();
            setTimeout(() => {
                window.location.reload();
            }, 100);
        });
    } else {
        // Fallback if service worker not supported
        dismissUpdate();
        setTimeout(() => {
            window.location.reload();
        }, 100);
    }
}

// Hide update notification
function dismissUpdate() {
    const updateBanner = document.querySelector('div[style*="position: fixed"]');
    if (updateBanner) {
        updateBanner.remove();
    }
}

// Dealing with application installation
let deferredPrompt;
let isInstalled = false;

window.addEventListener('beforeinstallprompt', (e) => {
    // Prevent automatic window display
    e.preventDefault();
    deferredPrompt = e;

    // Show Google-style PWA banner instead of simple button
    showGooglePWABanner();
});

// Create Google-style PWA Banner
function createGooglePWABanner() {
    // Add CSS styles to document
    const style = document.createElement('style');
    style.textContent = `
        /* Google PWA Install Banner - Large Size */
        .google-pwa-banner {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background: linear-gradient(135deg, #4285f4 0%, #34a853 100%);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 4px 16px rgba(66, 133, 244, 0.2);
            z-index: 10000;
            display: none;
            transform: translateY(-100%);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .google-pwa-banner.show {
            display: block;
            transform: translateY(0);
        }

        .banner-container {
            display: flex;
            align-items: center;
            padding: 34px 44px;
            max-width: 1200px;
            margin: 0 auto;
            gap: 28px;
        }

        .app-icon-container {
            position: relative;
        }

        .app-icon {
            width: 82px;
            height: 82px;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 22px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 34px;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .app-icon::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, rgba(255, 255, 255, 0.1), transparent);
            border-radius: 17px;
        }

        .app-details {
            flex: 1;
            min-width: 0;
            color: white;
        }

        .app-name {
            font-size: 28px;
            font-weight: 600;
            margin: 0 0 4px 0;
            color: white;
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
            line-height: 1.2;
        }

        .app-subtitle {
            font-size: 20px;
            color: rgba(255, 255, 255, 0.8);
            margin: 0;
            font-weight: 400;
            line-height: 1.3;
        }

        .banner-actions {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .install-button {
            background: white;
            color: #1a73e8;
            border: none;
            padding: 20px 40px;
            border-radius: 40px;
            font-size: 20px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            gap: 11px;
            white-space: nowrap;
            position: relative;
            overflow: hidden;
            min-height: 56px;
        }

        .install-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .install-button:hover::before {
            left: 100%;
        }

        .install-button:hover {
            transform: translateY(-1px);
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
            background: #f8f9fa;
        }

        .install-button:active {
            transform: translateY(0);
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.1);
        }

        .install-button.installing {
            background: #34a853;
            color: white;
            pointer-events: none;
        }

        .close-button {
            background: rgba(255, 255, 255, 0.1);
            border: none;
            color: rgba(255, 255, 255, 0.8);
            width: 56px;
            height: 56px;
            border-radius: 50%;
            cursor: pointer;
            font-size: 23px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
            backdrop-filter: blur(10px);
        }

        .close-button:hover {
            background: rgba(255, 255, 255, 0.2);
            color: white;
            transform: scale(1.1);
        }

        /* Pulse Animation for Install Button */
        @keyframes pulse {
            0% { box-shadow: 0 1px 4px rgba(0, 0, 0, 0.1), 0 0 0 0 rgba(255, 255, 255, 0.7); }
            70% { box-shadow: 0 1px 4px rgba(0, 0, 0, 0.1), 0 0 0 9px rgba(255, 255, 255, 0); }
            100% { box-shadow: 0 1px 4px rgba(0, 0, 0, 0.1), 0 0 0 0 rgba(255, 255, 255, 0); }
        }

        .install-button.pulse {
            animation: pulse 2s infinite;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .banner-container {
                padding: 6px 12px;
                gap: 8px;
            }

            .app-icon {
                width: 32px;
                height: 32px;
                font-size: 14px;
                border-radius: 6px;
            }

            .app-name {
                font-size: 13px;
            }

            .app-subtitle {
                font-size: 10px;
            }

            .install-button {
                padding: 5px 10px;
                font-size: 11px;
                gap: 3px;
                min-height: 26px;
            }

            .close-button {
                width: 26px;
                height: 26px;
                font-size: 12px;
            }
        }

        @media (max-width: 480px) {
            .banner-container {
                padding: 5px 10px;
                gap: 6px;
            }

            .app-icon {
                width: 28px;
                height: 28px;
                font-size: 12px;
            }

            .app-name {
                font-size: 12px;
            }

            .app-subtitle {
                font-size: 9px;
            }

            .install-button {
                padding: 4px 8px;
                font-size: 10px;
                min-height: 24px;
                border-radius: 12px;
            }

            .close-button {
                width: 24px;
                height: 24px;
                font-size: 11px;
            }
        }

        @media (max-width: 320px) {
            .banner-container {
                padding: 4px 8px;
            }

            .app-details {
                min-width: 120px;
            }

            .install-button {
                padding: 3px 6px;
                font-size: 9px;
                min-height: 22px;
            }
        }
    `;
    document.head.appendChild(style);

    // Create banner HTML
    const banner = document.createElement('div');
    banner.id = 'googlePwaBanner';
    banner.className = 'google-pwa-banner';
    banner.innerHTML = `
        <div class="banner-container">
            <div class="app-icon-container">
                <div class="app-icon">
                    <span>🚀</span>
                </div>
            </div>

            <div class="app-details">
                <h3 class="app-name">Abdallah Samir - Portfolio</h3>
                <p class="app-subtitle">Get a faster and better experience with the app.</p>
            </div>

            <div class="banner-actions">
                <button id="installButton" class="install-button pulse">
                    <span>📱</span>
                    Install
                </button>
                <button id="closeButton" class="close-button">
                    ✕
                </button>
            </div>
        </div>
    `;

    document.body.appendChild(banner);
    return banner;
}

function showGooglePWABanner() {
    // Remove any existing install button first
    const existingButton = document.querySelector('button[onclick*="deferredPrompt"]');
    if (existingButton) {
        existingButton.remove();
    }

    let banner = document.getElementById('googlePwaBanner');

    // Create banner if it doesn't exist
    if (!banner) {
        banner = createGooglePWABanner();
    }

    const installBtn = document.getElementById('installButton');
    const closeBtn = document.getElementById('closeButton');

    // Show banner always if not installed
    if (!isInstalled) {
        banner.classList.add('show');

        // Add pulse animation after showing
        setTimeout(() => {
            installBtn.classList.add('pulse');
        }, 500);
    }

    // Install Button Click Handler
    installBtn.addEventListener('click', async () => {
        installBtn.classList.remove('pulse');
        installBtn.classList.add('installing');
        installBtn.innerHTML = '<span>⏳</span>Installing...';

        if (deferredPrompt) {
            // Real PWA Installation
            deferredPrompt.prompt();
            const { outcome } = await deferredPrompt.userChoice;

            if (outcome === 'accepted') {
                handleInstallSuccess();
            } else {
                handleInstallCancel();
            }

            deferredPrompt = null;
        } else {
            // Demo Installation
            setTimeout(() => {
                handleInstallSuccess();
            }, 1500);
        }
    });

    // Handle Successful Installation
    function handleInstallSuccess() {
        installBtn.innerHTML = '<span>✅</span>Installed';
        installBtn.style.background = '#34a853';
        installBtn.style.color = 'white';
        isInstalled = true;

        // Add success animation
        installBtn.style.transform = 'scale(1.1)';
        setTimeout(() => {
            installBtn.style.transform = 'scale(1)';
        }, 200);

        // Hide banner after success
        setTimeout(() => {
            hideBanner();
        }, 2500);
    }

    // Handle Installation Cancel
    function handleInstallCancel() {
        installBtn.classList.remove('installing');
        installBtn.innerHTML = '<span>📱</span>Install';
        installBtn.classList.add('pulse');
    }

    // Hide Banner Function
    function hideBanner() {
        banner.classList.remove('show');
        installBtn.classList.remove('pulse');
    }

    // Close Button Handler
    closeBtn.addEventListener('click', () => {
        hideBanner();
        // Removed localStorage to make banner show every time
    });

    // Add interactive effects
    installBtn.addEventListener('mouseenter', () => {
        if (!installBtn.classList.contains('installing')) {
            installBtn.classList.remove('pulse');
        }
    });

    installBtn.addEventListener('mouseleave', () => {
        if (!installBtn.classList.contains('installing') && banner.classList.contains('show')) {
            setTimeout(() => {
                installBtn.classList.add('pulse');
            }, 1000);
        }
    });
}

// Function to detect if device is mobile
function isMobileDevice() {
    return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ||
        (navigator.platform === 'MacIntel' && navigator.maxTouchPoints > 1) || // iPad on iOS 13+
        window.innerWidth <= 768;
}

// PWA Intro Screen
function createPWAIntroScreen() {
    const introScreen = document.createElement('div');
    introScreen.id = 'pwaIntroScreen';
    introScreen.innerHTML = `
        <div onclick="closePWAIntro()" style="
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: 10001;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 1;
            transition: opacity 0.5s ease;
            cursor: pointer;
        ">
            <div onclick="event.stopPropagation();" style="
                background: rgba(255, 255, 255, 0.95);
                backdrop-filter: blur(10px);
                border-radius: 20px;
                padding: 35px;
                max-width: 90%;
                width: 380px;
                text-align: center;
                box-shadow: 0 20px 40px rgba(0,0,0,0.1);
                animation: slideUp 0.6s ease-out;
                position: relative;
                cursor: default;
            ">
                <button onclick="closePWAIntro()" style="
                    position: absolute;
                    top: 10px;
                    right: 10px;
                    background: transparent;
                    border: none;
                    font-size: 18px;
                    color: #999;
                    cursor: pointer;
                    width: 24px;
                    height: 24px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    border-radius: 50%;
                    transition: all 0.2s ease;
                " onmouseover="this.style.background='#f0f0f0'; this.style.color='#666'" onmouseout="this.style.background='transparent'; this.style.color='#999'">✕</button>
                <div style="font-size: 50px; margin-bottom: 15px;">📱</div>
                <h2 style="
                    color: #333;
                    font-size: 24px;
                    margin: 0 0 10px 0;
                    font-weight: 700;
                ">Abdallah Samir Portfolio App</h2>
                <p style="
                    color: #666;
                    font-size: 14px;
                    line-height: 1.6;
                    margin: 0 0 20px 0;
                ">Install our website's web application on your home screen for quick and easy access every time you are on the go</p>
                <div style="
                    color: #888;
                    font-size: 13px;
                    margin-top: 15px;
                    padding-top: 15px;
                    border-top: 1px solid #eee;
                ">
                    <strong>Just tap ⋮ </span> <strong>then 'Add to Home Screen'</strong>
                </div>
            </div>
        </div>
        <style>
            @keyframes slideUp {
                from {
                    opacity: 0;
                    transform: translateY(30px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
        </style>
    `;
    document.body.appendChild(introScreen);
    return introScreen;
}

function showPWAIntro() {
    // Check if intro was already shown (using a simple flag)
    if (window.pwaIntroShown) return;

    // Only show intro on mobile devices
    if (!isMobileDevice()) return;

    const introScreen = createPWAIntroScreen();
    window.pwaIntroShown = true;

    // Prevent body scroll when intro is showing
    document.body.style.overflow = 'hidden';
}

function closePWAIntro() {
    const introScreen = document.getElementById('pwaIntroScreen');
    if (introScreen) {
        introScreen.style.opacity = '0';
        setTimeout(() => {
            introScreen.remove();
            document.body.style.overflow = 'auto';
        }, 500);
    }
}

// Show PWA intro on page load
window.addEventListener('load', () => {
    setTimeout(() => {
        showPWAIntro();
    }, 1000); // Show after 1 second
});

// Hide install button after installation
window.addEventListener('appinstalled', () => {
    console.log('PWA: App was installed successfully');
    const banner = document.getElementById('googlePwaBanner');
    if (banner) {
        banner.classList.remove('show');
    }
    isInstalled = true;
    deferredPrompt = null;
});

// Track connection status
window.addEventListener('online', () => {
    console.log('PWA: Back online');
    hideOfflineMessage();
});

window.addEventListener('offline', () => {
    console.log('PWA: Gone offline');
    showOfflineMessage();
});

function showOfflineMessage() {
    const offlineMessage = document.createElement('div');
    offlineMessage.id = 'offline-message';
    offlineMessage.innerHTML = `
    <div style="
      position: fixed;
      bottom: 20px;
      left: 20px;
      background: #ef4444;
      color: white;
      padding: 12px 20px;
      border-radius: 8px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.15);
      z-index: 1001;
    ">
      <strong>No internet connection</strong><br>
      <small>Works offline</small>
    </div>
  `;
    document.body.appendChild(offlineMessage);
}

function hideOfflineMessage() {
    const offlineMessage = document.getElementById('offline-message');
    if (offlineMessage) {
        offlineMessage.remove();
    }
}
