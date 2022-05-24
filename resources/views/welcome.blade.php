<x-guestLayout>
    <!-- {{--<livewire:forms.contacts/>--}} -->
    <div class="w-full">
        <x-homepage.hero :heroes="$heroes"/>
    </div>
    <div class="flex flex-col justify-center items-center mt-0 bg-white">
        <x-homepage.content/>
    </div>
{{--
    <div class="max-w-4xl m-auto mt-8">
        <div class="grid grid-cols-3 gap-3">
            @foreach ($stories as $story)
                <x-story :story="$story"/>
            @endforeach
        </div>

        <div class="font-bold">Casa da Mamé</div>
        <div class="flex">
            <div class="w-1/4">
                <img class="w-full" src="img/casa_mame.jpeg">
            </div>
            <div class="w-3/4">
                A “Casa da Mamé” acolhe crianças que perderam a sua mãe durante o parto. Perder a mãe nos primeiros suspiros é certamente a forma mais dura e injusta de entrar no nosso mundo. Um mundo, onde, infelizmente, tantas vezes se mistura o milagre e a beleza da vida com a dor da perda.
                A “Na Rota dos Povos” tem assumido o papel de abraçar essas crianças que, num país onde a taxa de mortalidade infantil é uma das mais elevadas do mundo, teriam o seu futuro hipotecado.
                Para continuarmos a dar a mão às nossas crianças e caminharmos com elas rumo a um futuro melhor, é essencial a vossa ajuda.
            </div>
        </div>
    </div>
    <div class="max-w-4xl m-auto">
        Na Rota dos Povos
        @php
            $user = \App\Models\User::find(1);
        @endphp
        <x-user size="big" :user="$user"/>
        @for($i=0; $i<100;$i++)
            <div class="font-sans">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, porro alias dolore illum doloremque molestiae mollitia molestias, sit dolores assumenda numquam asperiores ullam! Dolor quo architecto vel enim. Qui, autem.</div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati sapiente iste aperiam pariatur magni, impedit deleniti officia libero saepe reiciendis dignissimos aspernatur, sint recusandae possimus autem atque accusamus. Eius, doloremque.</div>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste commodi voluptatum accusamus, reiciendis optio animi veritatis, sit nemo repellat, quis sunt? Fugiat officiis porro ratione in ullam quisquam beatae esse.</div>
        @endfor
    </div>
    --}}
</x-guestLayout>