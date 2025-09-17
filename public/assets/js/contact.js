
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
    url: "/send-email",
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

