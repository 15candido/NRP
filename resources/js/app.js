require('./bootstrap');

import Alpine from 'alpinejs';
import { findIndex, times } from 'lodash';
import Swal from 'sweetalert2';

window.Alpine = Alpine;
window.Swal = Swal;


/* ===============================================
                Carousel Js
   ============================================= */


const carousel = document.querySelector('section > .carousel');
const slideItems = carousel.querySelector('.slides-wrapper');
const slides = Array.from(slideItems.children);
const indicators = carousel.querySelector('.slide-indicators');
const prevButton = carousel.querySelector('button > .prev-button');
const nextButton = carousel.querySelector('button > .next-button');
let currentSlideIndex = 0;

const fill = 'forwards';
const duration = 950;
const easing = 'ease-in-out';
const autoSlideShow = 4000;
let animating = false;
let timer = null;


// Callback animate function 
function animateAsync(elemen, keyframes, options) {
    return new Promise(res => {
        elemen.animate(keyframes, options);
        setTimeout(res, options.duration || 0);
    });
}

// Enable and desabled navigation button 
const enableDesableArrow = (slides, nextButton, prevButton, slideIndex) => {
    if (slideIndex === 0) {
        prevButton.classList.remove('enabled-button');
        nextButton.classList.add('enabled-button');
    } else if (slideIndex === slides.length - 1) {
        prevButton.classList.add('enabled-button');
        nextButton.classList.remove('enabled-button');
    } else {
        prevButton.classList.add('enabled-button');
        nextButton.classList.add('enabled-button');
    }
}

const moveTo = (slideIndex) => {

    // Check the currentSlideIndex
    if (slideIndex === currentSlideIndex || animating) {
        return;
    }

    animating = true;  // Change animating status 
    clearTimeout(timer); // Cancel auto slide 

    // Get the current slide and move to next sibling slide 
    const currentSlide = slides[currentSlideIndex];
    const nextSlide = slides[slideIndex];

    indicators.children[currentSlideIndex].classList.remove('active');
    indicators.children[slideIndex].classList.add('active');
    const slideDirection = slideIndex > currentSlideIndex ? '-100%' : '100%';

    //Slide animation 
    Promise.all([

        animateAsync(nextSlide, [
            { transform: `translate(${parseInt(slideDirection, 10) * -1}%, 0)` },
            { transform: 'translate(0, 0)' }
        ], { duration, fill, easing }),

        animateAsync(currentSlide, [
            { transform: 'translate(0, 0)' },
            { transform: `translate(${slideDirection}, 0)` }
        ], { duration, fill, easing })
    ]).then(() => {

        currentSlideIndex = slideIndex;
        currentSlide.classList.remove('active');
        nextSlide.classList.add('active');
        animating = false;
        timer = setTimeout(
            () => moveTo(slideIndex === slides.length - 1 ? 0 : slideIndex + 1),
            autoSlideShow);
    });

    //Active or deactive button navigation 
    enableDesableArrow(slides, nextButton, prevButton, slideIndex);

};

nextButton.addEventListener('click', () =>
    moveTo(Math.min(currentSlideIndex + 1, slides.length - 1))
); // Incremented currentSlideIndex
prevButton.addEventListener('click', () =>
    moveTo(Math.max(0, currentSlideIndex - 1)));//Never decrement the currentSlideIndex below zero

