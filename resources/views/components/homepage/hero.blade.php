<div class="carousel">
    <!-- Carousel wrapper -->
    <div class="carousel_track-container">
        <ul class="carousel_track">
            <li class="carousel_slide current_slide">
                <img src="images/heroes/1.jpg" class="carousel_image" alt="...">
            </li>
            <li class="carousel_slide">
                <img src="images/heroes/2.jpg" class="carousel_image" alt="...">
            </li>
            <li class="carousel_slide">
                <img src="images/heroes/3.jpg" class="carousel_image" alt="...">
            </li>
            <li class="carousel_slide">
                <img src="images/heroes/4.jpg" class="carousel_image" alt="...">
            </li>
            <li class="carousel_slide">
                <img src="images/heroes/5.jpg" class="carousel_image" alt="...">
            </li>
        </ul>
    </div>

    <!-- Slider indicators -->
    <div class="absolute  z-30 flex gap-3 justify-center items-center -translate-x-1/2 bottom-5 left-1/2 carousel_nav">
        <button type="button" class="w-3.5 h-3.5 bg-white/50 rounded-full current_slide"></button>
        <button type="button" class="w-3.5 h-3.5 bg-white/50 rounded-full pointer-events-auto"></button>
        <button type="button" class="w-3.5 h-3.5 bg-white/50 rounded-full pointer-events-auto"></button>
        <button type="button" class="w-3.5 h-3.5 bg-white/50 rounded-full pointer-events-auto"></button>
        <button type="button" class="w-3.5 h-3.5 bg-white/50 rounded-full pointer-events-auto"></button>
    </div>

    <!-- Slider controls -->
    <button type="button" class="absolute flex items-center justify-center h-full top-1/2 -translate-y-1/2 z-30 left-0  px-5 
    lg:left-40 lg:px-0 pointer-events-none group focus:outline-none">
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 
        group-focus:ring-4 group-focus:ring-white group-focus:outline-none btn_left ">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute flex items-center justify-center h-full top-1/2 -translate-y-1/2 z-30 right-0 px-5 
    lg:right-40 lg:px-0 pointer-events-none group focus:outline-none">
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50
        group-focus:ring-4 group-focus:ring-white group-focus:outline-none btn_right enabled_btn">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>