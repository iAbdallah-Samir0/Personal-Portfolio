<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <!-- Meta Tags for SEO -->
    <title>Abdallah Samir | Backend Developer | Portfolio|My Works</title>
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
    <link rel="stylesheet" href="{{asset('assets/css/style_portfolio.css')}}"">
</head>

<body>
<!-- bars background -->
<div class="bars-box" id="barsBox">
    <div class="bar" style="--i:6;"></div>
    <div class="bar" style="--i:5;"></div>
    <div class="bar" style="--i:4;"></div>
    <div class="bar" style="--i:3;"></div>
    <div class="bar" style="--i:2;"></div>
    <div class="bar" style="--i:1;"></div>
</div>

<!--start header-->
<header id="header">
    <a href="{{route('portfolio.home')}}" class="logo">Portfolio.</a>
    <i class="bx bx-menu" id="menu-icon"></i>
    <nav>
        <a href="{{route('portfolio.home')}}" class="">Home</a>
        <a href="{{route('portfolio.services')}}" class="">Services</a>
        <a href="{{route('portfolio.resume')}}" class="active">Resume</a>
        <a href="{{route('portfolio.portfolio')}}" class="">Portfolio</a>
        <a href="{{route('portfolio.emails.contact')}}" class="">Contact</a>
    </nav>
</header>
<!--end header-->

<!--start Portfolio Section -->
<section class="portfolio" id="portfolioSection">
    <h2 class="heading">Latest <span>Project</span></h2>

    <div class="portfolio-container">
        <div class="portfolio-box">
            <div class="portfolio-detail active">
                <p class="numb">01</p>
                <h3>Backend Project</h3>
                <p>I worked as a backend developer for an e-commerce project, focusing on creating and optimizing APIs to manage product listings, user authentication, and order processing. My responsibilities included designing database schemas, ensuring data integrity.</p>
                <div class="tech">
                    <p>PHP , Laravel , DataGrip</p>
                </div>
                <div class="live-github">
                    <a href="https://iabdallah-samir0.github.io/Surfside-Media/"><i class="bx bx-arrow-back"></i><span>Live Project</span></a>
                    <a href="https://github.com/iAbdallah-Samir0/E-Commerce"><i class="bx bxl-github"></i><span>Github Repository</span></a>
                </div>
            </div>

            <div class="portfolio-detail">
                <p class="numb">02</p>
                <h3>Backend Project</h3>
                <p>I worked as a backend developer on a hospital management system, building and optimizing APIs to manage patient records, appointments, and billing processes. My role included designing database structures, ensuring secure data storage, and integrating with external medical systems for smooth information flow.</p>
                <div class="tech">
                    <p>PHP , Laravel , MySql</p>
                </div>
                <div class="live-github">
                    <a href="#"><i class="bx bx-arrow-back"></i><span>Live Project</span></a>
                    <a href="https://github.com/iAbdallah-Samir0/Hospitals-Management"><i class="bx bxl-github"></i><span>Github Repository</span></a>
                </div>
            </div>

            <div class="portfolio-detail">
                <p class="numb">03</p>
                <h3>Personal Portfolio</h3>
                <p>I designed and developed my personal portfolio website to showcase my projects, skills, and experience in web development.
                    The portfolio was built with a focus on clean design, responsiveness, and performance optimization.
                    It highlights my backend and frontend work, provides direct access to my GitHub repositories,
                    and serves as a central place for potential employers or clients to learn more about me.</p>
                <div class="tech">
                    <p>HTML , CSS , JavaScript , PHP , Laravel</p>
                </div>
                <div class="live-github">
                    <a href="#"><i class="bx bx-arrow-back"></i><span>Live Project</span></a>
                    <a href="https://github.com/iAbdallah-Samir0/Personal-Portfolio"><i class="bx bxl-github"></i><span>Github Repository</span></a>
                </div>
            </div>
        </div>

        <div class="portfolio-box">
            <div class="portfolio-carousel">
                <div class="img-slide">
                    <div class="img-item">
                        <img src="{{asset('assets/img/Ecommerce-Website-Design.png')}}" alt="">
                    </div>
                    <div class="img-item">
                        <img src="{{asset('assets/img/hos_sys_7.png')}}" alt="">
                    </div>
                    <div class="img-item">
                        <img src="{{asset('assets/img/my_portfolio_8.png')}}" alt="">
                    </div>
                </div>

                <div class="navigation">
                    <button class="arrow-left disabled"><i class='bx bx-chevron-left'></i></button>
                    <button class="arrow-right"><i class='bx bx-chevron-right'></i></button>
                </div>
            </div>
        </div>
    </div>
</section>
<!--end Portfolio Section -->

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const menuIcon = document.querySelector('#menu-icon');
        const navbar = document.querySelector('header nav');
        const header = document.querySelector('header');
        const portfolioSection = document.getElementById('portfolioSection');
        const barsBox = document.getElementById('barsBox');

        // Start animation of tapes
        setTimeout(() => {
            barsBox.classList.add('loaded');
        }, 500);

        // Hide the ribbons item permanently
        setTimeout(() => {
            barsBox.style.display = 'none';
        }, 4000);

        // Show the header first after the end of the last bar
        setTimeout(() => {
            header.classList.add('show');
        }, 4300);

        // Show the Portfolio section 4.8 seconds after the header appears
        setTimeout(() => {
            portfolioSection.classList.add('show');
            // Reactivate scroll after the page has completed loading
            document.documentElement.style.overflow = 'auto';
            document.documentElement.style.overflowX = 'hidden';
            document.body.style.overflow = 'auto';
            document.body.style.overflowX = 'hidden';
        }, 4800);

        // Portfolio carousel functionality
        const portfolioDetails = document.querySelectorAll('.portfolio-detail');
        const imgSlide = document.querySelector('.img-slide');
        const arrowLeft = document.querySelector('.arrow-left');
        const arrowRight = document.querySelector('.arrow-right');
        let currentIndex = 0;

        function updateCarousel() {
            // Carousel website update
            const translateX = -(currentIndex * 33.333333);
            imgSlide.style.transform = `translateX(${translateX}%)`;

            // Update portfolio details
            portfolioDetails.forEach((detail, index) => {
                detail.classList.toggle('active', index === currentIndex);
            });

            // Update navigation buttons
            arrowLeft.classList.toggle('disabled', currentIndex === 0);
            arrowRight.classList.toggle('disabled', currentIndex === portfolioDetails.length - 1);
        }

        arrowRight.addEventListener('click', () => {
            if (currentIndex < portfolioDetails.length - 1) {
                currentIndex++;
                updateCarousel();
            }
        });

        arrowLeft.addEventListener('click', () => {
            if (currentIndex > 0) {
                currentIndex--;
                updateCarousel();
            }
        });

        // Touch support for mobile
        let touchStartX = 0;
        let touchStartY = 0;
        let isSwiping = false;

        const carousel = document.querySelector('.portfolio-carousel');

        carousel.addEventListener('touchstart', (e) => {
            touchStartX = e.touches[0].clientX;
            touchStartY = e.touches[0].clientY;
            isSwiping = false;
        }, { passive: true });

        carousel.addEventListener('touchmove', (e) => {
            const touchCurrentX = e.touches[0].clientX;
            const touchCurrentY = e.touches[0].clientY;

            const diffX = Math.abs(touchCurrentX - touchStartX);
            const diffY = Math.abs(touchCurrentY - touchStartY);

            if (diffX > diffY && diffX > 10) {
                isSwiping = true;
                e.preventDefault();
            }
        }, { passive: false });

        carousel.addEventListener('touchend', (e) => {
            if (!isSwiping) return;

            const touchEndX = e.changedTouches[0].clientX;
            const diff = touchStartX - touchEndX;

            if (Math.abs(diff) > 50) {
                if (diff > 0 && currentIndex < portfolioDetails.length - 1) {
                    currentIndex++;
                    updateCarousel();
                } else if (diff < 0 && currentIndex > 0) {
                    currentIndex--;
                    updateCarousel();
                }
            }
        }, { passive: true });

        // Initialize carousel
        updateCarousel();

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

        // Improved performance for mobile devices - Removed impact on Home image
        let resizeTimeout;
        window.addEventListener('resize', () => {
            clearTimeout(resizeTimeout);
            resizeTimeout = setTimeout(() => {
                // Remove the code that affects the home image
                // Because this causes the image to be reduced when moving from Portfolio
            }, 100);
        });
    });
</script>
</body>
</html>
