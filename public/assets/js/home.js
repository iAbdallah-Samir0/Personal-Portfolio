
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
