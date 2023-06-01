<div class="w-full mb-12 bg-red-900">
    <div class="relative h-[383px] sm:h-[433px] xl:h-[497px] 2xl:h-[520px] overflow-hidden bg-red-400">
        <div x-data="{ visible: 0, images: ['/images/heroes/2.jpg', '/images/heroes/3.jpg', '/images/heroes/4.jpg' , '/images/heroes/5.jpg', '/images/heroes/6.jpg']}">
            <template x-for="(image, index) in images">
                <div class="absolute w-full h-full">
                    <img class="object-cover object-center w-full h-full" :src="image" x-show="index == visible" />
                </div>
            </template>
            <div class="absolute z-10 flex justify-center space-x-4">
                <template x-for="(image, index) in images">
                    <p @click="visible = index" class="rounded-full bg-blue-400 p-4"></p>
                </template>
            </div>
            <!-- Navigation buttons -->

            <button type="button" @click="visible++; if (visible == images.length) visible = 0;" class="absolute flex items-center justify-center h-auto top-1/2 -translate-y-1/2 z-30 right-0 
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
            <button type="button" @click="visible--; if (visible == -1) visible = 4;" class="absolute flex items-center justify-center h-auto top-1/2 -translate-y-1/2 z-30 left-0  
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
            <!-- <p @click="visible++; if (visible == images.length) visible = 0;" class="border m-4 bg-blue-400 p-4">Frente</p>
            <p @click="visible--; if (visible == -1) visible = 4;" class="border m-4 bg-green-400 p-4">Trás</p> -->
        </div>
    </div>
</div>

<!-- <div x-data="{ visible: 0, images: ['/images/heroes/2.jpg', '/images/heroes/3.jpg', '/images/heroes/4.jpg' , '/images/heroes/5.jpg', '/images/heroes/6.jpg']}">
    <template x-for="(image, index) in images">
        <div>
            <img class="w-full" :src="image" x-show="index == visible"/>
        </div>
    </template>
    <div class="flex justify-center space-x-4">
        <template x-for="(image, index) in images">
            <p @click="visible = index" class="rounded-full bg-blue-400 p-4"></p>
        </template>
    </div>
    <p @click="visible++; if (visible == images.length) visible = 0;" class="border m-4 bg-blue-400 p-4">Frente</p>
    <p @click="visible--; if (visible == -1) visible = 4;" class="border m-4 bg-green-400 p-4">Trás</p>
</div> -->