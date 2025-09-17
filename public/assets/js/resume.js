
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




