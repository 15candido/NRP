<x-guestLayout>
    {{--Page title--}}
    <x-slot name="title">
        {{ ('Equipa Guiné-Bissau') }}
    </x-slot>
    <div class="flex flex-col min-h-screen justify-center items-center">
        <x-page-header src="images/project/carouselteamgb.jpg" title="Equipa Guiné-Bissau" fromPage="quem somos" toPage="Equipa Guiné-Bissau" alt="Imagem da Na Rota dos Povos" /> <!--about us hero image -->
        <x-cards.structureWhitOutBg>
            <div class="flex flex-col gap-6">
                <div class="flex flex-col">
                    <h3>Direção Guiné-Bissau</h3>
                    <p class="flex flex-col break-words">
                        Lorem, ipsum dolor sit amet consectetur
                        adipisicing elit. Dolore tempore nemo expedita nisi neque, facilis aperiam quod? Ipsa ipsum
                        voluptatibus officiis cum minima ipsam maiores, tempora nostrum facere reprehenderit facilis.
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore tempore nemo expedita nisi neque,
                        facilis aperiam quod? Ipsa ipsum voluptatibus officiis cum minima ipsam
                        maiores, tempora nostrum facere reprehenderit facilis.
                    </p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach($profiles as $profile)
                    <x-cards.members-card-profile :content="$profile" />
                    @endforeach
                </div>
            </div>
        </x-cards.structureWhitOutBg>
    </div>
</x-guestLayout>