<div x-data="{ visible: 0, images: ['/images/heroes/2.jpg', '/images/heroes/3.jpg', '/images/heroes/4.jpg' , '/images/heroes/5.jpg', '/images/heroes/6.jpg']}">
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
</div>