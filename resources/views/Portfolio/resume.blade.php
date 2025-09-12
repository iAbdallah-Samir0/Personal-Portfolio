<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <!-- Meta Tags for SEO -->
    <title>Abdallah Samir | Backend Developer | Portfolio|Resume</title>
    <meta name="description" content="I am Abdallah Samir, a Backend Developer specialized in PHP and Laravel. I provide professional web and application solutions. Explore my work and services.">
    <meta name="keywords" content="Abdallah Samir, Backend Developer, PHP Developer, Laravel Developer, Web Development, Portfolio, Web Developer, Application Development">
    <meta name="author" content="Abdallah Samir">

    <!-- Open Graph (Social Media) -->
    <meta property="og:title" content="Portfolio | Abdallah Samir | Backend Developer PHP|Laravel">
    <meta property="og:description" content="Backend Developer specialized in PHP and Laravel. Learn more about my work and services.">
    <meta property="og:image" content="https://abdallahsamir.site/assets/img/my_portfolio_9.png">
    <meta property="og:url" content="https://abdallahsamir.site/">
    <meta property="og:type" content="website">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="og:title" content="Portfolio | Abdallah Samir | Backend Developer PHP|Laravel">
    <meta name="twitter:description" content="Backend Developer specialized in PHP and Laravel. Explore my work and services.">
    <meta property="og:image" content="https://abdallahsamir.site/assets/img/my_portfolio_9.png">

    <!-- Canonical -->
    <link rel="canonical" href="https://abdallahsamir.site/" />

    <!-- boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="icon" href="{{asset('assets/ico/favicon.jpeg')}}" type="image/x-icon">
    <!-- custom css -->
    <link rel="stylesheet" href="{{asset('assets/css/style_resume.css')}}"">
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

<!-- resume section -->
<section class="resume" id="resumeSection">
    <div class="resume-container">
        <div class="resume-box">
            <h2>Why Hire Me?</h2>
            <p class="desc">With expertise in PHP and Laravel, I build secure, scalable web applications tailored to your needs. My commitment to quality and innovation ensures reliable solutions that drive results.</p><br>
            <button class="resume-btn active">Experience</button>
            <button class="resume-btn">Education</button>
            <button class="resume-btn">Skills</button>
            <button class="resume-btn">About Me</button>
        </div>

        <div class="resume-box">
            <div class="resume-detail experience active">
                <h2 class="heading">My <span>Experience</span></h2>
                <p class="desc">As a developer with an academic background in Computer Science, I have extensive experience in building high-quality software applications. I focus on delivering innovative solutions that meet clients' needs with precision and professionalism.</p><br>
                <div class="resume-list">
                    <div class="resume-item">
                        <p class="year">MAY 2024 – JULY 2025</p>
                        <h3>Backend Developer</h3>
                        <p class="company">Qortova.</p>
                        <p>Developed and maintained server-side logic using CakePHP framework and PHP.</p>
                    </div>

                    <div class="resume-item">
                        <p class="year">DEC 2023 – FEB 2024</p>
                        <h3>Backend Developer</h3>
                        <p class="company">O-Projects.</p>
                        <p>Developed e-commerce solutions using Bagisto platform, ensuring smooth functionality and
                            user experience.</p>
                    </div>

                    <div class="resume-item">
                        <p class="year">FEB 2022 – OCT 2022</p>
                        <h3>Backend Developer</h3>
                        <p class="company">REFILEX.</p>
                        <p>Work with senior developers and implement code which is written in PHP.</p>
                    </div>
                </div>
            </div>

            <div class="resume-detail education">
                <h2 class="heading">My <span>Education</span></h2>
                <p class="desc">Holder of a Bachelor's degree in Computer Science, where I gained a strong foundation in programming, software development, and system engineering. My passion for continuous learning enables me to stay updated with the latest technologies in the field.</p><br>
                <div class="resume-list">
                    <div class="resume-item">
                        <p class="year">2021-2023</p>
                        <h3>Diploma IN CS</h3>
                        <p class="company">Cairo University.</p>
                        <p>Obtainer's degree a diploma in computer science in Graduate School of Statistical Research in
                            Cairo University, Egypt.</p>
                    </div>

                    <div class="resume-item">
                        <p class="year">2016-2020</p>
                        <h3>Bachelor's MIS</h3>
                        <p class="company">Thebes Academy.</p>
                        <p>Bachelor's degree in Management Information Systems Thebes Academy of Management
                            Information Systems in Maadi, Egypt.</p>
                    </div>
                </div>
            </div>

            <div class="resume-detail skills">
                <h2 class="heading">My <span>Skills</span></h2>
                <p class="desc">With a background in Computer Science, I have developed a diverse set of technical skills, including programming, database design, and web application development. I always strive to apply these skills to deliver practical and efficient solutions.</p><br>
                <div class="resume-list">
                    <div class="resume-item">
                        <i class="bx bxl-html5"></i>
                        <span>HTML5</span>
                    </div>
                    <div class="resume-item">
                        <i class="bx bxl-css3"></i>
                        <span>CSS3</span>
                    </div>
                    <div class="resume-item">
                        <i class="bx bxl-javascript"></i>
                        <span>JavaScript</span>
                    </div>
                    <div class="resume-item">
                        <i class="bx bxl-php"></i>
                        <span>PHP</span>
                    </div>
                    <div class="resume-item">
                        <i class="fab fa-laravel"></i>
                        <span>Laravel</span>
                    </div>
                    <div class="resume-item">
                        <i class='bx bxs-cake'></i>
                        <span>CakePHP</span>
                    </div>
                    <div class="resume-item">
                        <i class="bx bxl-github"></i>
                        <span>Github</span>
                    </div>
                    <div class="resume-item">
                        <i class="bx bxl-git"></i>
                        <span>.Git</span>
                    </div>
                    <div class="resume-item">
                        <i class='bx bxs-data' ></i>
                        <span>MYSQL</span>
                    </div>
                </div>
            </div>

            <div class="resume-detail about">
                <h2 class="heading">About <span>Me</span></h2>
                <p class="desc">I am a software developer with a background in Computer Science, passionate about technology and problem-solving. I focus on creating innovative solutions using the latest technologies to deliver effective results that meet user needs.</p><br>
                <div class="resume-list">
                    <div class="resume-item">
                        <p>Name:<span>Abdallah Samir</span></p>
                    </div>
                    <div class="resume-item">
                        <p>Gender:<span>Male</span></p>
                    </div>
                    <div class="resume-item">
                        <p>Age:<span>26</span></p>
                    </div>
                    <div class="resume-item">
                        <p>Marital Status:<span>Single</span></p>
                    </div>
                    <div class="resume-item">
                        <p>Military Status:<span>Exempt</span></p>
                    </div>
                    <div class="resume-item">
                        <p>City:<span>Cairo</span></p>
                    </div>
                    <div class="resume-item">
                        <p>Country:<span>Egypt</span></p>
                    </div>
                    <div class="resume-item">
                        <p>Nationality:<span>Egyptian</span></p>
                    </div>
                    <div class="resume-item">
                        <p>Experience<span>2 Years</span></p>
                    </div>
                    <div class="resume-item">
                        <p>Full Time:<span>Available</span></p>
                    </div>
                    <div class="resume-item">
                        <p>Freelance:<span>Available</span></p>
                    </div>
                    <div class="resume-item">
                        <p>Languages:<span>Arabic,English</span></p>
                    </div>
                    <div class="resume-item">
                        <p>Phone:<span>(+20) 011 5533 1309</span></p>
                    </div>
                    <div class="resume-item">
                        <p>Email:<span>abdallahsamir370@gmail.com</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--end resume section -->

<!-- custom js -->
<script src="{{asset('assets/js/script.js')}}"></script>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const menuIcon = document.querySelector('#menu-icon');
        const navbar = document.querySelector('header nav');
        const header = document.querySelector('header');
        const resumeSection = document.getElementById('resumeSection');
        const barsBox = document.getElementById('barsBox');

        // Start animation tapes from home
        setTimeout(() => {
            barsBox.classList.add('loaded');
        }, 500);

        // Hide the ribbons item permanently
        setTimeout(() => {
            barsBox.style.display = 'none';
        }, 4000);

        // Show all content gradually after the last bar appears
        setTimeout(() => {
            header.classList.add('show');
        }, 4300);

        setTimeout(() => {
            resumeSection.classList.add('show');
        }, 4800);

        // The rest of the code for the mobile phone
        if (menuIcon && navbar) {
            menuIcon.addEventListener('click', () => {
                menuIcon.classList.toggle('bx-x');
                navbar.classList.toggle('active');
                console.log("menu clicked!");
            });

            const navLinks = document.querySelectorAll('nav a');
            navLinks.forEach(link => {
                link.addEventListener('click', () => {
                    if (window.innerWidth <= 768) {
                        menuIcon.classList.remove('bx-x');
                        navbar.classList.remove('active');
                    }
                });
            });

            document.addEventListener('click', (e) => {
                if (window.innerWidth <= 768 &&
                    !navbar.contains(e.target) &&
                    !menuIcon.contains(e.target)) {
                    menuIcon.classList.remove('bx-x');
                    navbar.classList.remove('active');
                }
            });
        }

        const setVH = () => {
            let vh = window.innerHeight * 0.01;
            document.documentElement.style.setProperty('--vh', `${vh}px`);
        };

        setVH();
        window.addEventListener('resize', setVH);
        window.addEventListener('orientationchange', () => {
            setTimeout(setVH, 100);
        });

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
