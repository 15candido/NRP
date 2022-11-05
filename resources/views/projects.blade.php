<!--projects page -->
<div class="">
    <!-- {{$projects}} -->

</div>

<x-guestLayout>
    <div class="flex flex-col min-h-screen justify-center items-center">
        <div class="relative flex w-full h-96 justify-center items-center bg-gray-700">
           <img src="img/ProjectImg/carouselProject.jpg" alt="A Educação é o Único Caminho" class="absolute w-full h-full object-cover object-center">
           <div class="absolute flex flex-col max-w-7xl text-base font-bold text-white justify-center items-center space-y-4">
                <h1 class="text-4xl font-black uppercase">Projetos</h1>
                <span class="">
                    <a href="#" class="hover:text-[#1368aa]">Home</a> > <a href="#" class="hover:text-[#1368aa]">Projetos</a>
                </span>
            </div>
        </div>
        <x-cards.structureWhitOutBg>
            <div class=" flex w-full py-20">
                {{$projects}}
            </div>
        </x-cards.structureWhitOutBg>
    </div>
</x-guestLayout>

