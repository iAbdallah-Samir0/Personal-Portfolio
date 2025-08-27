<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Meta Tags for SEO -->
    <title>Abdallah Samir | Backend Developer | Portfolio|Home</title>
    <meta name="description" content="I am Abdallah Samir, a Backend Developer specialized in PHP and Laravel. I provide professional web and application solutions. Explore my work and services.">
    <meta name="keywords" content="Abdallah Samir, Backend Developer, PHP Developer, Laravel Developer, Web Development, Portfolio, Web Developer, Application Development">
    <meta name="author" content="Abdallah Samir">

    <!-- Open Graph (Social Media) -->
    <meta property="og:title" content="Portfolio | Abdallah Samir | Backend Developer PHP|Laravel">
    <meta property="og:description" content="Backend Developer specialized in PHP and Laravel. Learn more about my work and services.">
    <meta property="og:image" content="https://abdallahsamir.site/assets/img/my_portfolio_8.png">
    <meta property="og:url" content="https://abdallahsamir.site/">
    <meta property="og:type" content="website">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="og:title" content="Portfolio | Abdallah Samir | Backend Developer PHP|Laravel">
    <meta name="twitter:description" content="Backend Developer specialized in PHP and Laravel. Explore my work and services.">
    <meta name="twitter:image" content="https://abdallahsamir.site/assets/img/my_portfolio_8.png">

    <!-- Canonical -->
    <link rel="canonical" href="https://abdallahsamir.site/" />

    <!-- boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="{{asset('assets/ico/favicon.jpeg')}}" type="image/x-icon">
    <!-- custom css -->
    <link rel="stylesheet" href="{{asset('assets/css/style_home.css')}}"">
</head>

<body>
<!--start header-->
<header id="header">
    <a href="{{route('portfolio.home')}}" class="logo">Portfolio.</a>
    <i class="bx bx-menu" id="menu-icon"></i>
    <nav>
        <a href="{{route('portfolio.home')}}" class="active">Home</a>
        <a href="{{route('portfolio.services')}}" class="">Services</a>
        <a href="{{route('portfolio.resume')}}" class="">Resume</a>
        <a href="{{route('portfolio.portfolio')}}" class="">Portfolio</a>
        <a href="{{route('portfolio.emails.contact')}}" class="">Contact</a>
    </nav>
</header>
<!--end header-->

<!-- bars background -->
<div class="bars-box" id="barsBox">
    <div class="bar" style="--i:6;"></div>
    <div class="bar" style="--i:5;"></div>
    <div class="bar" style="--i:4;"></div>
    <div class="bar" style="--i:3;"></div>
    <div class="bar" style="--i:2;"></div>
    <div class="bar" style="--i:1;"></div>
</div>

<!--start Home Section -->
<section class="home" id="homeSection">
    <div class="home-detail">
        <h1>Abdallah Samir</h1>
        <h2>I'm a
            <span style="--i:4;" data-text="Software Engineer">Software Engineer</span>
            <span style="--i:3;" data-text="Coder">Coder</span>
            <span style="--i:2;" data-text="Backend Developer">Backend Developer</span>
            <span style="--i:1;" data-text="PHP Developer | Laravel">PHP Developer | Laravel</span>
        </h2>
        <p>Skilled Back-end developer who's passionate about his work, learning new skills, and solving problems. Knowledgeable in testing and debugging processes. Bringing forth expertise in the design, installation, testing, and maintenance of web systems.</p>

        <div class="btn-sci">
            <a href="{{asset('assets/cv/Abdallah-Samir-Resume.pdf')}}" download="Abdallah-Samir-Resume.pdf" class="btn" id="downloadCVBtn">Download CV</a>
            <div class="sci">
                <a href="https://github.com/iAbdallah-Samir0"><i class="bx bxl-github"></i></a>
                <a href="https://www.linkedin.com/in/abdallah-samir-745918224?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"><i class="bx bxl-linkedin"></i></a>
                <a href="mailto:abdallahsamir370@gmail.com"><i class="bx bxl-gmail"></i></a>
                <a href="https://wa.me/+2001155331309"><i class="bx bxl-whatsapp"></i></a>
            </div>
        </div>
    </div>

    <!--start Home img-->
    <div class="home-img">
        <div class="img-box">
            <div class="img-item">
                <img src="{{asset('assets/img/my-picture9.png')}}" alt="My picture" width="20px" height="20px">
            </div>
        </div>
    </div>
    <!--end Home img-->
</section>
<!--end Home Section -->

<!-- custom js -->
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const menuIcon = document.querySelector('#menu-icon');
        const navbar = document.querySelector('header nav');
        const header = document.querySelector('header');
        const homeSection = document.getElementById('homeSection');
        const barsBox = document.getElementById('barsBox');

        // Start animation of tapes
        setTimeout(() => {
            barsBox.classList.add('loaded');
        }, 500);

        // Hide the ribbons item permanentlyً
        setTimeout(() => {
            barsBox.style.display = 'none';
        }, 4000);

        // Show all content gradually 4.8 seconds after the last bar appears
        setTimeout(() => {
            // Show the header first
            header.classList.add('show');
        }, 4300);

        setTimeout(() => {
            // Show the Home section gradually
            homeSection.classList.add('show');
        }, 4800);

        // Menu wizard for mobile
        if (menuIcon && navbar) {
            menuIcon.addEventListener('click', () => {
                menuIcon.classList.toggle('bx-x');
                navbar.classList.toggle('active');
            });

            // Close menu when clicking on links
            const navLinks = document.querySelectorAll('nav a');
            navLinks.forEach(link => {
                link.addEventListener('click', () => {
                    if (window.innerWidth <= 768) {
                        menuIcon.classList.remove('bx-x');
                        navbar.classList.remove('active');
                    }
                });
            });

            // Close the menu when you click outside
            document.addEventListener('click', (e) => {
                if (window.innerWidth <= 768 &&
                    !navbar.contains(e.target) &&
                    !menuIcon.contains(e.target)) {
                    menuIcon.classList.remove('bx-x');
                    navbar.classList.remove('active');
                }
            });
        }

        // Handling window resizing
        const setVH = () => {
            let vh = window.innerHeight * 0.01;
            document.documentElement.style.setProperty('--vh', `${vh}px`);
        };

        setVH();
        window.addEventListener('resize', setVH);
        window.addEventListener('orientationchange', () => {
            setTimeout(setVH, 100);
        });

        // Improved performance for mobile devices with support for all screens
        let resizeTimeout;
        window.addEventListener('resize', () => {
            clearTimeout(resizeTimeout);
            resizeTimeout = setTimeout(() => {
                const homeImg = document.querySelector('.home-img .img-box');
                if (homeImg && window.innerWidth <= 768) {
                    // Calculate a suitable size for different screens
                    let size;
                    if (window.innerWidth <= 350) {
                        size = Math.min(180, window.innerWidth * 0.65);
                    } else if (window.innerWidth <= 450) {
                        size = Math.min(220, window.innerWidth * 0.7);
                    } else if (window.innerWidth <= 600) {
                        size = Math.min(280, window.innerWidth * 0.75);
                    } else {
                        size = Math.min(350, window.innerWidth * 0.8);
                    }
                    homeImg.style.width = size + 'px';
                    homeImg.style.height = size + 'px';
                }
            }, 100);
        });

        // Added orientation change support for mobile devices
        window.addEventListener('orientationchange', () => {
            setTimeout(() => {
                // Recalculate dimensions after changing the screen orientation
                window.dispatchEvent(new Event('resize'));
            }, 500);
        });

        // Improved performance for touch screens
        if ('ontouchstart' in window) {
            document.body.style.cursor = 'default';
            // Remove hover effects on touch devices
            const hoverElements = document.querySelectorAll('.btn, .home-detail .btn-sci .sci a');
            hoverElements.forEach(el => {
                el.addEventListener('touchstart', function() {
                    this.style.transform = 'scale(0.95)';
                });
                el.addEventListener('touchend', function() {
                    this.style.transform = 'scale(1)';
                });
            });
        }
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const downloadCVBtn = document.getElementById('downloadCVBtn');

        function isMobileDesktopMode() {
            const ua = navigator.userAgent;
            const isMobile = /Mobi|Android|iPhone|iPad|iPod/i.test(ua);
            const isDesktopUA = !(/Mobile|Android/i.test(ua));
            return isMobile && isDesktopUA;
        }

        const isMobileOrDesktopModeInMobile = () =>
            window.innerWidth <= 768 || isMobileDesktopMode();

        if (downloadCVBtn && isMobileOrDesktopModeInMobile()) {
            let timeoutId;

            function applyPressEffect() {
                if (timeoutId) clearTimeout(timeoutId); // Remove any previous deferred timer
                downloadCVBtn.style.background = 'transparent';
                downloadCVBtn.style.color = 'var(--main-color)';
                downloadCVBtn.style.boxShadow = '0 0 10px var(--main-color)';
                downloadCVBtn.style.borderColor = 'var(--main-color)';
            }

            function removePressEffect() {
                // We delay returning the original color of the button after 2 seconds
                timeoutId = setTimeout(() => {
                    downloadCVBtn.style.background = 'var(--main-color)';
                    downloadCVBtn.style.color = 'var(--bg-color)';
                    downloadCVBtn.style.boxShadow = '0 0 1rem var(--main-color)';
                    downloadCVBtn.style.borderColor = 'var(--main-color)';
                }, 300);
            }

            downloadCVBtn.addEventListener('mousedown', applyPressEffect);
            downloadCVBtn.addEventListener('mouseup', removePressEffect);
            downloadCVBtn.addEventListener('mouseleave', removePressEffect);

            downloadCVBtn.addEventListener('touchstart', applyPressEffect);
            downloadCVBtn.addEventListener('touchend', removePressEffect);
            downloadCVBtn.addEventListener('touchcancel', removePressEffect);
        }
    });
</script>
</body>
</html>
