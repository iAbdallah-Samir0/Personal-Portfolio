
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

