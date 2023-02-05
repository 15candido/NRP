<x-guestLayout>
    {{--Page title--}}
    <x-slot name="title">
        {{ ('Equipa Guiné-Bissau') }}
    </x-slot>
    <div class="flex flex-col min-h-screen justify-center items-center">
        <x-page-header src="img/project/carouselSocial.jpg" title="Equipa Guiné-Bissau" fromPage="quem somos" toPage="Equipa Guiné-Bissau" alt="Imagem da Na Rota dos Povos" /> <!--about us hero image -->
        <x-cards.structureWhitOutBg>
            <div class="flex flex-col py-20 gap-6">
                <div>
                    <x-cards.info-default-card title="Direção Guiné-Bissau" description="Lorem, ipsum dolor sit amet consectetur 
                        adipisicing elit. Dolore tempore nemo expedita nisi neque, facilis aperiam quod? Ipsa ipsum 
                        voluptatibus officiis cum minima ipsam maiores, tempora nostrum facere reprehenderit facilis. 
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore tempore nemo expedita nisi neque, 
                        facilis aperiam quod? Ipsa ipsum voluptatibus officiis cum minima ipsam 
                        maiores, tempora nostrum facere reprehenderit facilis." />
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach($profiles as $profile)
                    <x-users.profile :profile="$profile" />
                    @endforeach
                </div>
            </div>
        </x-cards.structureWhitOutBg>
    </div>
</x-guestLayout>