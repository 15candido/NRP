 <!-- Carousel section  -->
<div class="carousel relative m-auto w-full h-[300px] sm:h-[350px] xl:h-[414px] 2xl:h-[500px]">
  <!-- carousel wrapper -->
  <div class="carousel_track-container relative w-full h-full">
    <!-- carousel item  -->
    <div class="carousel_track relative w-full h-full">
      <!-- item 1 -->
      <div class="carousel_slide current_slide w-full h-full relative duration-700 ease-in-out">
        <img class="absolute top-0 bottom-0 w-full h-full object-cover" src="img/heroes/carousel_1.jpg" alt="">
      </div>
      <!-- item 2 -->
      <div class="carousel_slide duration-700 ease-in-out">
        <img class="absolute top-0 bottom-0 w-full h-full object-cover" src="img/heroes/carousel_2.jpg" alt="">
      </div>
       <!-- item 3 -->
      <div class="carousel_slide duration-700 ease-in-out">
        <img class="absolute top-0 bottom-0 w-full h-full object-cover" src="img/heroes/carousel_3.jpg" alt="">
      </div>
    </div>
    <!--slide indicator -->
    <div class="carousel_nav flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
      <button type="button" class=" carousel_indicator current-slide w-3 h-3 rounded-full bg-white/90 hover:bg-white"></button>
      <button type="button" class=" carousel_indicator w-3 h-3 rounded-full bg-white/50 hover:bg-white"></button>
      <button type="button" class=" carousel_indicator w-3 h-3 rounded-full bg-white/50 hover:bg-white"></button>
    </div>
    <!-- My slide control button Left -->
    <button type="button" class="btn_left flex absolute top-1/2 left-0 z-30 justify-center items-center px-2 -translate-y-1/2 
    cursor-pointer group focus:outline-none">
      <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-11 sm:h-11 bg-white/30 dark:bg-gray-800/30
      group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70
      group-focus:outline-none">
        <svg class="w-5 h-5 text-white sm:w-9 sm:h-9 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24"
        xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
        <span class="hidden">Previeus</span>
      </span>
    </button>
     <!-- My slide control button Right -->
    <button type="button" class="btn_right flex absolute top-1/2 right-0 z-30 justify-center items-center px-2 -translate-y-1/2
    cursor-pointer group focus:outline-none">
      <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-11 sm:h-11 bg-white/30 dark:bg-gray-800/30
      group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70
      group-focus:outline-none">
        <svg class="w-5 h-5 text-white sm:w-9 sm:h-9 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" 
        xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
        <span class="hidden">Next</span>
      </span>
    </button>
  </div>
  <script>
    // track all the item carousel and store it in an arry 
    const track = document.querySelector('.carousel_track');
    const slides = Array.from(track.children);
    const nextButton = document.querySelector('.btn_right');
    const prevButton = document.querySelector('.btn_left');
    const dotsNav = document.querySelector('.carousel_nav');
    const indicator = Array.from(dotsNav.children);
    const slideWidth = slides[0].getBoundingClientRect().width;

    
    //arrange the slides next to one another
    // slides[0].style.left = slideWidth * 0 + 'px';
    // slides[1].style.left = slideWidth * 1 + 'px';
    // slides[2].style.left = slideWidth * 2 + 'px';
    const setSlidePosition = (slide, index) =>{
      slide.style.left = slideWidth * index + 'px';
    };
    slides.forEach(setSlidePosition);
      // when I click in to the left button, move to the left side

    // when I click in to the right button, move to the right side
    nextButton.addEventListener('click', e =>{
    //move to the next slide
      const currentSlide = track.querySelector('.current_slide');
      const nextSlide = currentSlide.nextElementSibling;
      const amountToMove = nextSlide.style.left;
      track.style.transform = 'translateX(-' + amountToMove + ')';
      //console.log(amountToMove);
    });
    // when I click in to the nav indicator, move to that side
  </script>
</div>
