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
                        A ONG “Na Rota dos Povos” é constituída por um grupo de amigos, voluntários e parceiros que se
                        dedicam a apoiar as causas sociais, contribuindo com as suas competências e experiências
                        profissionais para a concretização da missão da organização.
                        O nosso trabalho é suportado na íntegra pelos nossos voluntários, desde a angariação, a
                        gestão do dia-adia, a organização de missões, a comunicação, etc.
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