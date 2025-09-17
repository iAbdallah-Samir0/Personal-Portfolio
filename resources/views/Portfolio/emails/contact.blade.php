<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

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
    <title>Abdallah Samir | Backend Developer | Portfolio|Contact</title>
    <meta name="description" content="I am Abdallah Samir, a Backend Developer specialized in PHP and Laravel. I provide professional web and application solutions. Explore my work and services.">
    <meta name="keywords" content="Abdallah Samir, Backend Developer, PHP Developer, Laravel Developer, Web Development, Portfolio, Web Developer, Application Development">
    <meta name="author" content="Abdallah Samir">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Open Graph (Social Media) -->
    <meta property="og:title" content="Portfolio | Abdallah Samir | Backend Developer PHP|Laravel">
    <meta property="og:description" content="Backend Developer specialized in PHP and Laravel. Learn more about my work and services.">
    <meta property="og:image" content="https://abdallahsamir.site/assets/img/my_portfolio_10.png">
    <meta property="og:url" content="https://abdallahsamir.site/">
    <meta property="og:type" content="website">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="og:title" content="Portfolio | Abdallah Samir | Backend Developer PHP|Laravel">
    <meta name="twitter:description" content="Backend Developer specialized in PHP and Laravel. Explore your work and services.">
    <meta name="twitter:image" content="https://abdallahsamir.site/assets/img/my_portfolio_10.png">

    <!-- Canonical -->
    <link rel="canonical" href="https://abdallahsamir.site/" />

    <!-- boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="{{asset('assets/ico/favicon.jpeg')}}" type="image/x-icon">
    <!-- custom css -->
    <link rel="stylesheet" href="{{asset('assets/css/style_contact.css')}}"">
    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
        <a href="{{route('portfolio.portfolio')}}" class="">Portfolio</a>
        <a href="{{route('portfolio.emails.contact')}}" class="active">Contact</a>
    </nav>
</header>
<!--end header-->

<!--start Contact Section -->
<section class="contact" id="contactSection">
    <div class="contact-container">

        <div class="contact-box">
            <h2>Let's Work Together</h2>
            <p class="desc">If you are interested in working with me as a  PHP Back-end Developer Laravel , please reach out to me.
                For contact, you can message me via ...</p>

            <div class="contact-detail">
                <a href="tel:+201155331309" style="display: flex; align-items: center; text-decoration: none; color: inherit;">
                    <i class='bx bxs-phone'></i>
                    <div class="detail">
                        <p>Phone</p>
                        <p>(+20) 11 5533 1309</p>
                    </div>
                </a>
            </div>

            <div class="contact-detail">
                <a href="mailto:abdallahsamir370@gmail.com" style="display: flex; align-items: center; text-decoration: none; color: inherit;">
                    <i class='bx bxs-envelope'></i>
                    <div class="detail">
                        <p>Email</p>
                        <p>abdallahsamir370@gmail.com</p>
                    </div>
                </a>
            </div>

            <div class="contact-detail">
                <a href="https://www.google.com/maps/search/Soubra+Cairo+Egypt" target="_blank" style="display: flex; align-items: center; text-decoration: none; color: inherit;">
                    <i class='bx bxs-map'></i>
                    <div class="detail">
                        <p>Address</p>
                        <p>Soubra-Cairo-Egypt</p>
                    </div>
                </a>
            </div>
        </div>

        <div class="contact-box">
            <div id="flash-message" style="
                display:none;
                color: black;
                font-weight: bold;
                font-size: 2rem;
                position: fixed;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                background: yellow;
                padding: 1rem 2rem;
                border-radius: 0.6rem;
                box-shadow: 0 0.2rem 0.6rem rgba(0,0,0,0.2);
                opacity: 1;
                transition: opacity 1s ease;
                z-index: 9999;
                text-align: center;
            "></div>

            <form id="contact-form">
                <h2 class="heading">Contact <span>Me!</span></h2>
                <div class="field-box">
                    <input type="text" name="name" placeholder="Full Name*" required>
                    <input type="email" name="email" placeholder="Email Address*" required>
                    <input type="text" name="phone" placeholder="Phone Number">
                    <input type="text" name="subject" placeholder="Email Subject*" required>
                    <textarea name="message" placeholder="Your Message*" required></textarea>
                </div>
                <button type="submit" class="btn" aria-label="Send Message" style="display: inline-flex; align-items: center; gap: 6px;">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         fill="none"
                         viewBox="0 0 24 24"
                         width="22" height="22"
                         stroke="currentColor"
                         stroke-width="2">
                        <path d="M22 2L11 13" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M22 2L15 22L11 13L2 9L22 2Z" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    Send Message
                </button>
            </form>
        </div>

    </div>
</section>
<!--end Contact Section -->


<!-- custom js -->
<script src="{{ asset('assets/js/contact.js') }}"></script>

<!-- PWA JavaScript -->
<script src="/pwa.js"></script>
</body>
</html>
