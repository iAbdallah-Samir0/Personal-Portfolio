
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

