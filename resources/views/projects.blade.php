<!--projects page -->
<div class="">
    <!-- {{$projects}} -->

</div>

<x-guestLayout>
    <div class="flex flex-col min-h-screen justify-center items-center">
        <x-page-header 
            src="img/ProjectImg/carouselProject.jpg"
            title="Projetos"
            subtitle="Home -> Projetos"
            alt="Imagem de crianças"
        />
        <x-cards.structureWhitOutBg>
            <div class=" flex w-full py-20">
                {{$projects}}
            </div>
        </x-cards.structureWhitOutBg>
    </div>
</x-guestLayout>

