<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <!-- PWA Meta Tags -->

    <!-- PWA Manifest -->
    <link rel="manifest" href="/manifest.json">

    <!-- Theme colors -->
    <meta name="theme-color" content="#1f242d">
    <meta name="msapplication-navbutton-color" content="#1f242d">
    <meta name="navigationbar-color" content="#1f242d">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">


    <!-- Apple Touch Icon -->
    <link rel="apple-touch-icon" href="/icons/icon-192x192.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/icons/icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/icons/icon-192x192.png">

    <!-- Apple PWA Configuration -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="apple-mobile-web-app-title" content="Abdallah Portfolio">

    <!-- Microsoft Tiles -->
    <meta name="msapplication-TileImage" content="/icons/icon-144x144.png">
    <meta name="msapplication-config" content="/browserconfig.xml">

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="/icons/icon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/icons/icon-16x16.png">
    <link rel="shortcut icon" href="/favicon.ico">



    <!-- Meta Tags for SEO -->
    <title>Abdallah Samir | Backend Developer | Portfolio|My Works</title>
    <meta name="description" content="I am Abdallah Samir, a Backend Developer specialized in PHP and Laravel. I provide professional web and application solutions. Explore my work and services.">
    <meta name="keywords" content="Abdallah Samir, Backend Developer, PHP Developer, Laravel Developer, Web Development, Portfolio, Web Developer, Application Development">
    <meta name="author" content="Abdallah Samir">

    <!-- Open Graph (Social Media) -->
    <meta property="og:title" content="Portfolio | Abdallah Samir | Backend Developer PHP|Laravel">
    <meta property="og:description" content="Backend Developer specialized in PHP and Laravel. Learn more about my work and services.">
    <meta property="og:image" content="https://abdallahsamir.site/assets/img/my_portfolio_10.png">
    <meta property="og:url" content="https://abdallahsamir.site/">
    <meta property="og:type" content="website">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="og:title" content="Portfolio | Abdallah Samir | Backend Developer PHP|Laravel">
    <meta name="twitter:description" content="Backend Developer specialized in PHP and Laravel. Explore my work and services.">
    <meta name="twitter:image" content="https://abdallahsamir.site/assets/img/my_portfolio_10.png">

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
        <a href="{{route('portfolio.resume')}}" class="">Resume</a>
        <a href="{{route('portfolio.portfolio')}}" class="active">Portfolio</a>
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
                        <img src="{{asset('assets/img/my_portfolio_10.png')}}" alt="">
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


<!-- custom js -->
<script src="{{ asset('assets/js/portfolio.js') }}"></script>

<!-- PWA JavaScript -->
<script src="/pwa.js"></script>
</body>
</html>
