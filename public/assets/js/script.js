const resumeBtns = document.querySelectorAll('.resume-btn');

resumeBtns.forEach((btn, idx) => {
    btn.addEventListener('click', () => {
        const resumeDetails = document.querySelectorAll('.resume-detail');

        // Remove 'active' class from all buttons
        resumeBtns.forEach(btn => {
            btn.classList.remove('active');
        });

        // Add 'active' class to the clicked button
        btn.classList.add('active');

        // Remove 'active' class from all details
        resumeDetails.forEach(detail => {
            detail.classList.remove('active');
        });

        // Add 'active' class to the corresponding detail
        resumeDetails[idx].classList.add('active');
    });
});



const arrowRight = document.querySelector('.portfolio-carousel .arrow-right');
const arrowLeft = document.querySelector('.portfolio-carousel .arrow-left');

let index = 0;

const activePortfolio = () => {
    const imgSlide = document.querySelector('.portfolio-carousel .img-slide');
    const portfolioDetails = document.querySelectorAll('.portfolio-detail');
    imgSlide.style.transform = `translateX(calc(${index} * -100% - ${index * 2}rem))`;

    portfolioDetails.forEach(detail => {
        detail.classList.remove('active');
    });
    portfolioDetails[index].classList.add('active');
}

arrowRight.addEventListener('click', () => {
    if (index < 1) {
        index++;
        arrowLeft.classList.remove('disabled');
    } else {
        index = 2;
        arrowRight.classList.add('disabled');
    }
    activePortfolio();
});

arrowLeft.addEventListener('click', () => {
    if (index > 1) {
        index--;
        arrowRight.classList.remove('disabled');
    } else {
        index = 0;
        arrowLeft.classList.add('disabled');
    }
    activePortfolio();
});





// const menuIcon = document.querySelector('#menu-icon');
// const navbar = document.querySelector('header nav');
// menuIcon.addEventListener('click', () => {
//     menuIcon.classList.toggle('bx-x');
//     navbar.classList.toggle('active');
// });
//
// const activePage = () => {
//     const header = document.querySelector('header');
//     const barsBox = document.querySelector('.bars-box');
//
//     menuIcon.classList.remove('bx-x');
//     navbar.classList.remove('active');
// };

