
    <div>
        {{--Page title--}}
        <x-slot name="title">
            {{ ('Voluntariado') }}
        </x-slot>

        <div class="flex flex-col min-h-screen items-center">
            <x-page-header 
                    src="img/ProjectImg/carouselVolunteers.jpg"
                    title="Ser voluntário da Na Rota dos Povos" fromPage="Como Ajudar" toPage="Seja voluntário"
                    alt="Voluntários da Na Rota dos Povos"
            /> <!--about us hero image -->
            <x-cards.structureWhitOutBg>
                <div class="flex flex-col lg:flex-row justify-start items-start py-20 gap-10">
                <livewire:volunteers.register>
                </div>
            </x-cards.structureWhitOutBg>
        </div>
    </div>
