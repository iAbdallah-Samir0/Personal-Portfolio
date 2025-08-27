<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <!-- Meta Tags for SEO -->
    <title>Abdallah Samir | Backend Developer | Portfolio|Services</title>
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
    <link href='https://fonts.googleapis.com/css?family=Poppins:wght@400;500;700&display=swap' rel='stylesheet'>
    <link rel="icon" href="{{asset('assets/ico/favicon.jpeg')}}" type="image/x-icon">
    <!-- custom css -->
    <link rel="stylesheet" href="{{asset('assets/css/style_services.css')}}"">

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

<!--start services section -->
<section class="services" id="servicesSection">
    <h2 class="heading">My <span>Services</span></h2>
    <div class="services-container">
        <div class="services-box">
            <div class="icon">
                <i class='bx bx-code-alt'></i>
                <a href="#"><i class='bx bx-arrow-back'></i></a>
            </div>
            <h3>Web Application Development</h3>
            <p>Design and develop dynamic and scalable web applications using Laravel.</p>
        </div>

        <div class="services-box">
            <div class="icon">
                <i class='bx bx-code-alt'></i>
                <a href="#"><i class='bx bx-arrow-back'></i></a>
            </div>
            <h3>Database Management</h3>
            <p>Design and manage relational databases (MySQL, PostgreSQL, etc.).</p>
        </div>

        <div class="services-box">
            <div class="icon">
                <i class='bx bx-code-alt'></i>
                <a href="#"><i class='bx bx-arrow-back'></i></a>
            </div>
            <h3>Authentication and Authorization</h3>
            <p>Implement secure user authentication and role-based access control using Laravel's built-in systems.</p>
        </div>

        <div class="services-box">
            <div class="icon">
                <i class='bx bx-code-alt'></i>
                <a href="#"><i class='bx bx-arrow-back'></i></a>
            </div>
            <h3>API Development and Integration</h3>
            <p>Build custom APIs to expose backend functionalities.</p>
        </div>

        <div class="services-box">
            <div class="icon">
                <i class='bx bx-code-alt'></i>
                <a href="#"><i class='bx bx-arrow-back'></i></a>
            </div>
            <h3>Application Performance Optimization</h3>
            <p>Optimize application performance by caching (Redis, Memcached) and query optimization.</p>
        </div>

        <div class="services-box">
            <div class="icon">
                <i class='bx bx-code-alt'></i>
                <a href="#"><i class='bx bx-arrow-back'></i></a>
            </div>
            <h3>Error Handling and Debugging</h3>
            <p>Handle exceptions gracefully and implement logging systems using tools like Laravel's built-in logging or third-party services (e.g., Sentry).</p>
        </div>

        <div class="services-box">
            <div class="icon">
                <i class='bx bx-code-alt'></i>
                <a href="#"><i class='bx bx-arrow-back'></i></a>
            </div>
            <h3>Security Implementation</h3>
            <p>Implement security best practices to guard against SQL injection, cross-site scripting (XSS), and other common vulnerabilities.</p>
        </div>

        <div class="services-box">
            <div class="icon">
                <i class='bx bx-code-alt'></i>
                <a href="#"><i class='bx bx-arrow-back'></i></a>
            </div>
            <h3>Maintenance and Updates</h3>
            <p>Regularly maintain and update applications to ensure compatibility with the latest Laravel and PHP versions.</p>
        </div>
    </div>
</section>
<!--end services section -->

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const menuIcon = document.querySelector('#menu-icon');
        const navbar = document.querySelector('header nav');
        const header = document.querySelector('header');
        const servicesSection = document.getElementById('servicesSection');
        const barsBox = document.getElementById('barsBox');

        // Start animation of tapes
        setTimeout(() => {
            barsBox.classList.add('loaded');
        }, 500);

        // Hide the ribbons item permanently
        setTimeout(() => {
            barsBox.style.display = 'none';
        }, 4000);

        // Show all content gradually 4.8 seconds after the last bar appears
        setTimeout(() => {
            // Show the header first
            header.classList.add('show');
        }, 4300);

        setTimeout(() => {
            // Show the Services section gradually
            servicesSection.classList.add('show');
        }, 4800);

        // Menu wizard for mobile
        if (menuIcon && navbar) {
            menuIcon.addEventListener('click', () => {
                menuIcon.classList.toggle('bx-x');
                navbar.classList.toggle('active');
                console.log("menu clicked!");
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

        // Optimize performance for mobile devices
        let resizeTimeout;
        window.addEventListener('resize', () => {
            clearTimeout(resizeTimeout);
            resizeTimeout = setTimeout(() => {
                const homeImg = document.querySelector('.home-img .img-box');
                if (homeImg && window.innerWidth <= 768) {
                    homeImg.style.width = Math.min(350, window.innerWidth * 0.6) + 'px';
                    homeImg.style.height = Math.min(350, window.innerWidth * 0.6) + 'px';
                }
            }, 100);
        });
    });
</script>
</body>
</html>
