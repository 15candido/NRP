<div class="carousel relative m-auto overflow-hidden h-[300px] sm:h-[350px] xl:h-[414px] 2xl:h-[500px] ">
  <!-- My slide control button Left -->
  <button class="btn_left absolute top-1/2 left-0 md:left-28 z-30 justify-center items-center px-2 -translate-y-1/2 
      cursor-pointer group focus:outline-none">
    <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-11 sm:h-11 bg-white/30 dark:bg-gray-800/30
    group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70
    group-focus:outline-none">
      <svg class="w-5 h-5 text-white sm:w-9 sm:h-9 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24"
      xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
      <span class="hidden">Previeus</span>
    </span>
  </button>
 <!-- carousel item -->
  <div class="carousel_track relative w-full h-full m-0 p-0 duration-700 ease-in-out">
    <!-- item 1 -->
    <div class="carousel_slide current_slide absolute top-0 bottom-0 left-0 w-full h-full">
      <img class="carousel_slide w-full h-full object-cover" src="img/heroes/carousel_1.jpg" alt="">
    </div>
    <!-- item 2 -->
    <div class="carousel_slide absolute op-0 bottom-0 left-0 w-full h-full">
      <img class="carousel_slide w-full h-full object-cover" src="img/heroes/carousel_2.jpg" alt="">
    </div>
    <!-- item 3 -->
    <div class="carousel_slide absolute op-0 bottom-0 left-0 w-full h-full">
      <img class="carousel_slide w-full h-full object-cover" src="img/heroes/carousel_3.jpg" alt="">
    </div>
  </div>
  <!-- My slide control button Right -->
  <button class="btn_right flex absolute top-1/2 right-0 md:right-28 z-30 justify-center items-center px-2 -translate-y-1/2
    cursor-pointer group focus:outline-none">
    <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-11 sm:h-11 bg-white/30 dark:bg-gray-800/30
      group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70
      group-focus:outline-none">
        <svg class="w-5 h-5 text-white sm:w-9 sm:h-9 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" 
        xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
        <span class="hidden">Next</span>
      </span>
  </button>
  <!--slide indicator -->
  <div class="carousel_nav flex absolute bottom-10 left-1/2 z-30 space-x-3 -translate-x-1/2">
    <button type="button" class=" carousel_indicator current_indicator cursor-pointer w-3 h-3 rounded-full bg-white/90 hover:bg-white"></button>
    <button type="button" class=" carousel_indicator cursor-pointer w-3 h-3 rounded-full bg-white/50 hover:bg-white"></button>
    <button type="button" class=" carousel_indicator cursor-pointer w-3 h-3 rounded-full bg-white/50 hover:bg-white"></button>
  </div>
  <!-- script for hero/carousel -->
  <script>
    
    const track = document.querySelector('.carousel_track'); // track all the item carousel and store it in an arry 
    const slides = Array.from(track.children);
    const nextButton = document.querySelector('.btn_right');
    const prevButton = document.querySelector('.btn_left');
    const navIndicators = document.querySelector('.carousel_nav');
    const indicators = Array.from(navIndicators.children);
    const slideWidth = slides[0].getBoundingClientRect().width;
    
    const setSlidePosition = (slide, index) =>{
      //arrange the slides next to one another
      slide.style.left = slideWidth * index + 'px';
    };
    // looping  slides 
    slides.forEach(setSlidePosition);
    
    const moveToSlide = (track, currentSlide, targetSlide) =>{
      //move to slide with click event
      track.style.transform = 'translateX(-' + targetSlide.style.left +')';
      currentSlide.classList.remove('current_slide');
      targetSlide.classList.add('current_slide');
    };
   
    prevButton.addEventListener('click', e =>{
       // when I click in to the left button, move to the left side
      const myCurrentSlide = track.querySelector('.current_slide');
      const myPrevSlide = myCurrentSlide.previousElementSibling;
      moveToSlide(track, myCurrentSlide, myPrevSlide);
    });

    nextButton.addEventListener('click', e =>{
    // when I click in to the right button, move to the right side
    //move to the next slide
      const myCurrentSlide = track.querySelector('.current_slide');
      const myNextSlide = myCurrentSlide.nextElementSibling;
      moveToSlide(track, myCurrentSlide, myNextSlide);
    });
    navIndicators.addEventListener('click', e => {
      // when I click in to the nav indicator, move to that side
      const myTargetIndicator = e.target.closest('button');
      if (!myTargetIndicator) return;
       const myCurrentSlide = track.querySelector('.current_slide');
       const myCurrentIndicator = navIndicators.querySelector('.current_indicator');
       const targetIndexIndicator = indicators.findIndex(indicator => indicator === myTargetIndicator);
       const targetSlide = slides[targetIndexIndicator];
       moveToSlide(track, myCurrentIndicator, targetSlide);
      //  myCurrentIndicator.style.bg- = 'white/50';
      //  myTargetIndicator.style.bg- = 'white/50';
    });
  </script>
</div>