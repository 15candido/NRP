
// Responsive nav menu

(()=> {
    //Selecting classes
    const openNavMenu = document.querySelector(".open-nav-menu"),
    closeNavMenu = document.querySelector(".close-nav-menu"),
    navMenu = document.querySelector(".nav-menu"),
    menuOverley = document.querySelector(".menu-overley"),
    mediaSize = 991;

    openNavMenu.addEventListener('click', toggleNav);
    closeNavMenu.addEventListener('click', toggleNav);
    //This close nav menu when user cick outside of nav menu
    menuOverley.addEventListener("click", toggleNav);

    function toggleNav(){
        navMenu.classList.toggle("open");
        menuOverley.classList.toggle("active");
        document.body.classList.toggle("hidden-scrolling");
    //    console.log(bodyScrolling);
    }

    //Whem user click in dorpdown menu, search for the target
    navMenu.addEventListener("click", (event)=>{
       if(event.target.hasAttribute("data-toggle") && window.innerWidth <= mediaSize){
            // Prevent the default behavior of link referencing, the anchor link 
            event.preventDefault();
            const menuDropdown = event.target.parentElement;
            // If the drop-down menu is already expanded, then collapse it. 
            if(menuDropdown.classList.contains("active")){
                collapsesubMenu();
            }
            else {

                // Before collapsing, check for collapse
                if(navMenu.querySelector(".menu-dropdown.active")){
                    collapsesubMenu();
                }
                // expand new dropdown menu^
                menuDropdown.classList.add("active");
                const subMenu = menuDropdown.querySelector(".sub-menu");
                subMenu.style.maxHeight = subMenu.scrollHeight + "px";
            } 
        }
    });

    function collapsesubMenu(){
        navMenu.querySelector(".menu-dropdown.active .sub-menu").removeAttribute("style");
        navMenu.querySelector(".menu-dropdown.active").classList.remove("active");
    }

    function fixSize(){
        // In case nav menu is already open, close it
        if(navMenu.classList.contains("open")){
            toggleNav();
        }
        // In case menu dropdown is already expanded, collapse it
        if(navMenu.querySelector(".menu-dropdown.active")){
            collapsesubMenu();
        }
    }

    window.addEventListener("resize", function(){
        if(this.innerWidth > mediaSize){
            fixSize();
        }
    });
})();

// Fucntional hero images 
const heroTrack = document.querySelector('.hero_track'),
slides = Array.from(heroTrack.children),
nextButton = document.querySelector('.btn_left'), 
prevButton = document.querySelector('.btn_right'),
heroDotsNav = document.querySelector('.hero_dots_nav'),
dots = Array.from(heroDotsNav.children),
slideWidth = slides[0].getBoundingClientRect().width;

//arrange the slides next to each other
const setSlidePosition = (slide, index) =>{
    slide.style.left = slideWidth * index + 'px';
}
// loop the hero image
slides.forEach(setSlidePosition);

// to hide arrow navigation, whem slide was the last slideshow
const hideShowArrow = (slides, prevButton, nextButton, targetIndex) =>{
    if(targetIndex === 0){
        prevButton.classList.add('hidden_arrow');
        nextButton.classList.remove('hidden_arrow');
    } else if(targetIndex === slides.length - 1){
        prevButton.classList.remove('hidden_arrow');
        nextButton.classList.add('hidden_arrow');
    } else{
        prevButton.classList.remove('hidden_arrow');
        nextButton.classList.remove('hidden_arrow');
    }
}
// move hero image to the next slide - reusable function
const moveToSlide = (track, currentSlide, targetSlide) =>{
    track.style.transform = 'translateX(-' + targetSlide.style.left + ')';
    currentSlide.classList.remove('current_slide');
    targetSlide.classList.add('current_slide');
}

// remove the current slide class indicator and add it in to next target indicator 
const updateDot = (currentDot, targetDot) =>{
    currentDot.classList.remove('current_slide');
    targetDot.classList.add('current_slide');
}

// when user click in left arrow, move to the left side
nextButton.addEventListener('click', event => {
    const currentSlide = heroTrack.querySelector('.current_slide'),
    nextSlide = currentSlide.nextElementSibling,
    currentDot = heroDotsNav.querySelector('.current_slide'),
    nextDot = currentDot.nextElementSibling,
    nextIndex = slides.findIndex(slide => slide === nextSlide);
    // move to next Slide
    moveToSlide(heroTrack, currentSlide, nextSlide);
    updateDot(currentDot, nextDot);
    hideShowArrow(slides, prevButton, nextButton, nextIndex);
});

// when user click in right arrow, move to the right side
prevButton.addEventListener('click', event =>{
    const currentSlide = heroTrack.querySelector('.current_slide'),
    prevSlide = currentSlide.previousElementSibling,
    currentDot = heroDotsNav.querySelector('.current_slide'),
    prevtDot = currentDot.previousElementSibling,
    prevIndex = slides.findIndex( slide => slide === prevSlide);

    // move to previous slide
    moveToSlide(heroTrack, currentSlide, prevSlide);
    updateDot(currentDot, prevtDot);
    hideShowArrow(slides, prevButton, nextButton, prevIndex);
});

// move navigation dot, whem user clik on it or in arrow navigation 
heroDotsNav.addEventListener('click', e =>{
    // what indicator was click on?
    const targetDot = e.target.closest('button');
    const currentSilde = heroTrack.querySelector('.current_slide'),
    currentDot = heroDotsNav.querySelector('.current_slide'),
    targetIndex = dots.findIndex(dot => dot === targetDot),
    targetSlide = slides[targetIndex];

    moveToSlide(heroTrack, currentSilde, targetSlide);
    updateDot(currentDot, targetDot);
    hideShowArrow(slides, prevButton, nextButton, targetIndex);
});

