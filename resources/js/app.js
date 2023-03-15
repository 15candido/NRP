require('./bootstrap');

import Alpine from 'alpinejs';
import { findIndex } from 'lodash';
import Swal from 'sweetalert2';

window.Alpine = Alpine;
window.Swal = Swal;


/* ===============================================
                Carousel Js
   ============================================= */

// Get all carousel images
const track = document.querySelector('.carousel_track');
const slides = Array.from(track.children);
const dotsNav = document.querySelector('.carousel_nav');
const dots = Array.from(dotsNav.children);
const prevButton = document.querySelector('button .btn_left');
const nextButton = document.querySelector('button .btn_right');

// Arrange slides to next each other
const slideWidth = slides[0].getBoundingClientRect().width;
const setSlidePosition = (slide, index) => {
    slide.style.left = slideWidth * index + 'px';
};
slides.forEach(setSlidePosition);

// Move target slide 
const moveSlide = (track, curretSlide, targetSlide) => {
    track.style.transform = 'translateX(-' + targetSlide.style.left + ')';
    curretSlide.classList.remove('current_slide');
    targetSlide.classList.add('current_slide');
}

// Update dots 
const updateDots = (currentDot, targetDot) => {
    currentDot.classList.remove('current_slide');
    targetDot.classList.add('current_slide');
}

// Enable and desabled navigation button 
const enableDesableArrow = (slides, nextButton, prevButton, targetIndex) => {
    if (targetIndex === 0) {
        prevButton.classList.remove('enabled_btn');
        nextButton.classList.add('enabled_btn');
    } else if (targetIndex === slides.length - 1) {
        prevButton.classList.add('enabled_btn');
        nextButton.classList.remove('enabled_btn');
    } else {
        prevButton.classList.add('enabled_btn');
        nextButton.classList.add('enabled_btn');
    }
}

// Move to right side, when click left button
prevButton.addEventListener('click', event => {
    const curretSlide = document.querySelector('.current_slide');
    const prevSlide = curretSlide.previousElementSibling;
    const currentDot = dotsNav.querySelector('.current_slide');
    const nextDot = currentDot.previousElementSibling;
    const prevIndex = slides.findIndex(slide => slide === prevSlide);

    // Move to previous slide 
    moveSlide(track, curretSlide, prevSlide);
    updateDots(currentDot, nextDot);
    enableDesableArrow(slides, nextButton, prevButton, prevIndex);

    console.log(prevButton)
});

// Move to left side, when click right button
nextButton.addEventListener('click', event => {
    const curretSlide = document.querySelector('.current_slide');
    const nextSlide = curretSlide.nextElementSibling;
    const currentDot = dotsNav.querySelector('.current_slide');
    const nextDot = currentDot.nextElementSibling;
    const nextIndex = slides.findIndex(slide => slide === nextSlide);

    // Move to next slide 
    moveSlide(track, curretSlide, nextSlide);
    updateDots(currentDot, nextDot);
    enableDesableArrow(slides, nextButton, prevButton, nextIndex);
    console.log(nextButton);
});

// Move to current slide, when click to nav indicator
dotsNav.addEventListener('click', event => {

    const targetDot = event.target.closest('button');
    if (!targetDot) return;

    const curretSlide = track.querySelector('.current_slide');
    const currentDot = dotsNav.querySelector('.current_slide');
    const targetIndex = dots.findIndex(dot => dot === targetDot);
    const targetSlide = slides[targetIndex];

    moveSlide(track, curretSlide, targetSlide);
    updateDots(currentDot, targetDot);
    enableDesableArrow(slides, nextButton, prevButton, targetIndex);
});

