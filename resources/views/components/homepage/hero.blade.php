<section>
    <div class="carousel">
        <!-- Slide images  -->
        <ul class="slides-wrapper">
            <li class="slide active"><img src="images/heroes/1.jpg"></li>
            <li class="slide">
                <img src="images/heroes/2.jpg">
            </li>
            <li class="slide"><img src="images/heroes/3.jpg"></li>
            <li class="slide"><img src="images/heroes/4.jpg"></li>
            <li class="slide"><img src="images/heroes/5.jpg"></li>
            <li class="slide"><img src="images/heroes/6.jpg"></li>
        </ul>

        <!-- Slide indicators  -->
        <div class="slide-indicators">
            <button type="button" class="active"></button>
            <button type="button"></button>
            <button type="button"></button>
            <button type="button"></button>
            <button type="button"></button>
            <button type="button"></button>
        </div>

        <!-- Navigation buttons -->
        <button type="button" class="absolute flex items-center justify-center h-auto top-1/2 -translate-y-1/2 z-30 left-0  
        px-5 lg:left-40 lg:px-0 pointer-events-none group focus:outline-none">
            <span class="prev-button inline-flex items-center justify-center w-10 h-10 rounded-full bg-white 
            shadow-sm shadow-gray-400 hover:shadow-lg group-hover:bg-white/70 group-focus:ring-4 group-focus:ring-white/90 
            group-focus:outline-none transition duration-300 ease-in-out">
                <svg class="w-6 h-6 text-gray-500 group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute flex items-center justify-center h-auto top-1/2 -translate-y-1/2 z-30 right-0 
        px-5 lg:right-40 lg:px-0 pointer-events-none group focus:outline-none">
            <span class="next-button enabled-button inline-flex items-center justify-center w-10 h-10 rounded-full bg-white 
            shadow-sm shadow-gray-400 hover:shadow-lg group-hover:bg-white/70 group-focus:ring-4 group-focus:ring-white/90 
            group-focus:outline-none transition duration-300 ease-in-out">
                <svg class="w-6 h-6 text-gray-500 group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
</section>