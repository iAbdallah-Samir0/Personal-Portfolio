<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Meta Tags for SEO -->
    <title>Abdallah Samir | Backend Developer | Portfolio|Contact</title>
    <meta name="description" content="I am Abdallah Samir, a Backend Developer specialized in PHP and Laravel. I provide professional web and application solutions. Explore my work and services.">
    <meta name="keywords" content="Abdallah Samir, Backend Developer, PHP Developer, Laravel Developer, Web Development, Portfolio, Web Developer, Application Development">
    <meta name="author" content="Abdallah Samir">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Open Graph (Social Media) -->
    <meta property="og:title" content="Portfolio | Abdallah Samir | Backend Developer PHP|Laravel">
    <meta property="og:description" content="Backend Developer specialized in PHP and Laravel. Learn more about my work and services.">
    <meta property="og:image" content="https://abdallahsamir.site/assets/img/my_portfolio_8.png">
    <meta property="og:url" content="https://abdallahsamir.site/">
    <meta property="og:type" content="website">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta property="og:title" content="Portfolio | Abdallah Samir | Backend Developer PHP|Laravel">
    <meta name="twitter:description" content="Backend Developer specialized in PHP and Laravel. Explore your work and services.">
    <meta name="twitter:image" content="https://abdallahsamir.site/assets/img/my_portfolio_8.png">

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
                <button type="submit" class="btn">Send Message</button>
            </form>
        </div>

    </div>
</section>
<!--end Contact Section -->

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const menuIcon = document.querySelector('#menu-icon');
        const navbar = document.querySelector('header nav');
        const header = document.querySelector('header');
        const contactSection = document.getElementById('contactSection');
        const barsBox = document.getElementById('barsBox');

        // Start animation of tapes
        setTimeout(() => {
            barsBox.classList.add('loaded');
        }, 500);

        // Hide the ribbons item permanentlyً
        setTimeout(() => {
            barsBox.style.display = 'none';
        }, 4000);

        // Show the header first 0.5 seconds after the end of the last bar
        setTimeout(() => {
            header.classList.add('show');
        }, 4300);

        // Show the communication section 4.8 seconds after the header appears
        setTimeout(() => {
            contactSection.classList.add('show');
            // Reactivating scroll after the page has completed loading for small screens only
            if (window.innerWidth <= 768 && 'ontouchstart' in window) {
                document.documentElement.style.overflow = 'auto';
                document.documentElement.style.overflowX = 'hidden';
                document.body.style.overflow = 'auto';
                document.body.style.overflowX = 'hidden';
            }
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
                    if (window.innerWidth <= 768 && 'ontouchstart' in window) {
                        menuIcon.classList.remove('bx-x');
                        navbar.classList.remove('active');
                    }
                });
            });

            // Close the menu when you click outside
            document.addEventListener('click', (e) => {
                if (window.innerWidth <= 768 && 'ontouchstart' in window &&
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
    });

    $(function(){
        let firstSendDone = false;

        $('#contact-form').on('submit', function(e){
            e.preventDefault();

            // Fetch values and clean them
            let name    = $('input[name="name"]').val().trim();
            let email   = $('input[name="email"]').val().trim();
            let subject = $('input[name="subject"]').val().trim();
            let message = $('textarea[name="message"]').val().trim();

            // Verify that all fields are empty
            if(name === "" && email === "" && subject === "" && message === ""){
                $('#flash-message').css('background','#f88').text("Please fill out all required fields").fadeIn();
                setTimeout(function(){ $('#flash-message').fadeOut(); }, 2000);
                return;
            }

            // Name verification
            if(name === ""){
                $('#flash-message').css('background','#f88').text("Please enter your name").fadeIn();
                setTimeout(function(){ $('#flash-message').fadeOut(); }, 2000);
                return;
            }

            // Email verification
            if(email === ""){
                $('#flash-message').css('background','#f88').text("Please enter your email").fadeIn();
                setTimeout(function(){ $('#flash-message').fadeOut(); }, 2000);
                return;
            }

            // Verify the email format is correct
            let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if(!emailPattern.test(email)){
                $('#flash-message').css('background','#f88').text("Please enter a valid email").fadeIn();
                setTimeout(function(){ $('#flash-message').fadeOut(); }, 2000);
                return;
            }

            // Verify the topic
            if(subject === ""){
                $('#flash-message').css('background','#f88').text("Please enter a subject").fadeIn();
                setTimeout(function(){ $('#flash-message').fadeOut(); }, 2000);
                return;
            }

            // Verify the message
            if(message === ""){
                $('#flash-message').css('background','#f88').text("Please enter your message").fadeIn();
                setTimeout(function(){ $('#flash-message').fadeOut(); }, 2000);
                return;
            }

            // CSRF token setting
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // Determine if the device is mobile
            let isMobile = window.innerWidth <= 768 && 'ontouchstart' in window;

            // Send data
            $.ajax({
                url: "{{ route('send.email') }}",
                type: "POST",
                data: $(this).serialize(),
                beforeSend: function(){
                    $('#flash-message').css('background','green').text("Sending...").fadeIn();

                    // If it is Mobile and First Send, save the original button properties
                    if(isMobile && firstSendDone === false){
                        let $btn = $('.btn');
                        // Save original properties
                        $btn.data('original-bg', $btn.css('background-color'));
                        $btn.data('original-color', $btn.css('color'));
                        $btn.data('original-text', $btn.text());
                    }
                },
                success: function(response){
                    $('#flash-message').css('background','yellow').text("Message sent successfully").fadeIn();
                    $('#contact-form')[0].reset();

                    // Apply the mobile effect upon success
                    if(isMobile && firstSendDone === false){
                        firstSendDone = true;
                        let $btn = $('.btn');

                        // Change the button color immediately after success
                        $btn.css({
                            'background-color': 'yellow',
                            'color': '#000',
                            'pointer-events': 'none'
                        });

                        // The button returns to its original state after one second
                        setTimeout(function(){
                            $btn.css({
                                'background-color': $btn.data('original-bg'),
                                'color': $btn.data('original-color'),
                                'pointer-events': 'auto'
                            }).text($btn.data('original-text'));
                        }, 1000);
                    }

                    setTimeout(function(){
                        $('#flash-message').fadeOut();
                    }, 500);
                },
                error: function(xhr, status, error){
                    console.log('Error details:', xhr.responseText);
                    console.log('Status:', status);
                    console.log('Error:', error);
                    $('#flash-message').css('background','#f88').text("An error occurred while sending").fadeIn();
                    setTimeout(function(){
                        $('#flash-message').fadeOut();
                    }, 2000);
                }
            });
        });
    });
</script>
</body>
</html>
