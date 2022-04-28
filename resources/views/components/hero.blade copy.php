@props(['heroes'])


<div class="w-full relative">
    <div onclick="change_image(1)" class="absolute left-8 z-10 h-[600px] flex items-center hover:scale-105 cursor-pointer">
        <svg xmlns="http://www.w3.org/2000/svg" class="border-4 border-white p-4 h-24 w-24 rounded-full" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
        </svg>
    </div>
    <div onclick="change_image(-1)" class="absolute right-8 z-10 h-[600px] flex items-center hover:scale-105 cursor-pointer">
        <svg xmlns="http://www.w3.org/2000/svg" class="border-4 border-white p-4 h-24 w-24 rounded-full" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
        </svg>
    </div>
    @foreach ($heroes as $hero)
        <div class="invisible absolute inset-0" id="hero{{ $loop->index }}">
            <img class="absolute w-full h-[600px] object-cover" src="img/heroes/{{ $hero->image }}">
        </div>
    @endforeach
</div>

<script>
    let hero_position = 0;
    let hero_max = {{ $heroes->count() }};
    document.getElementById("hero" + hero_position).style.visibility = "visible";        

    function change_image(diferencial) {
        document.getElementById("hero" + hero_position).style.visibility = "hidden";        
        hero_position = hero_position + diferencial;
        if (hero_position < 0)
            hero_position = hero_max - 1;
        else if (hero_position == hero_max)
            hero_position = 0;
        document.getElementById("hero" + hero_position).style.visibility = "visible";
    }

</script>

    


{{--
<div class="carousel relative m-auto w-full h-[600px] bg-red-400">
    <button class="carousel_botton-right ml-52 absolute">
        <ion-icon class="btn-right bg-white" name="chevron-back-outline"></ion-icon>
    </button>
    <div class="carousel_track-container relative w-full h-full overflow-hidden">
        <ul class="carousel_track relative list-none p-0 m-0 h-full bg-yellow-300">
            <li class="carousel_slide active w-full h-full absolute">
                <img class="carousel_image w-full h-full
                object-cover object-center"src="img/contentor.jpg" alt="">
            </li>
            <li class="carousel_slide w-full h-full absolute">
                <img class="carousel_image w-full h-full
                object-cover object-center"src="img/contentor.jpg" alt="">
            </li>
            <li class="carousel_slide w-full h-full absolute">
                <img class="carousel_image w-full h-full
                object-cover object-center" src="img/contentor.jpg" alt="">
            </li>
        </ul>
    </div>
    <button class="carousel_botton-left ml-[1050px] absolute">
        <ion-icon class="btn-left0 bg-white" name="chevron-forward-outline"></ion-icon>
    </button>
    <div class="carousel-nav">
        <button class="carousel_indicator"></button>
        <button class="carousel_indicator"></button>
        <button class="carousel_indicator"></button>
    </div>
</div>
--}}