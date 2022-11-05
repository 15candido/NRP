<x-guestLayout>
    <div class="flex flex-col min-h-screen justify-center items-center">
        <x-page-header 
            src="img/ProjectImg/carouselProject.jpg"
            title="Órgãos Sociais"
            subtitle="Home -> Projetos"
            alt="Imagem de crianças"
        />
        @php            
            $david = \App\Models\Person::find(1);         
            $candido = \App\Models\Person::find(2);            

        @endphp
        <h1 class="bg-red-400">
            <div>Direção</div>
            <div class="grid grid-cols-2 md:grid-cols-4">
                <x-person :person="$david"/>
                <x-person :person="$candido"/>
            </div>
        </h1>

        @php            
            $david = \App\Models\Person::find(1);         
            $candido = \App\Models\Person::find(2);            
        @endphp
        <h1 class="bg-red-400">
            <div>Direção</div>
            <div class="grid grid-cols-2 md:grid-cols-4">
                <x-person :person="$david"/>
                <x-person :person="$candido"/>
            </div>
        </h1>
    </div>
</x-guestLayout>

