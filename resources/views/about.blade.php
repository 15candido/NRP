<x-guestLayout>
    {{--Page title--}}
    <x-slot name="title">
        {{ ('Sobre Nós') }}
    </x-slot>
    <div class="flex flex-col min-h-screen justify-start items-center">
        <x-page-header src="images/project/carouselus2.jpg" title="Quem Somos" fromPage="Home" toPage="Quem somos" alt="Imagem da Na Rota dos Povos" /> <!--about us hero image -->
        <x-cards.structureWhitOutBg>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                {{-- Short description --}}
                @foreach($company as $company)
                <x-cards.about-briefing :content="$company" />
                @endforeach

                {{-- Image --}}
                <x-cards.page-card-image :image="$company->image" />
            </div>
        </x-cards.structureWhitOutBg>
        <x-cards.structureWithBg>
            {{-- Mission, vision and value section  --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 overflow-hidden">
                @foreach($mission as $mission)
                <x-cards.about-card-subtitle :content="$mission" />
                @endforeach
                @foreach($vision as $vision)
                <x-cards.about-card-subtitle :content="$vision" />
                @endforeach
                @foreach($valeus as $valeu)
                <x-cards.about-card-subtitle :content="$valeu" />
                @endforeach
            </div>
        </x-cards.structureWithBg>
        <x-cards.structureWhitOutBg>
            {{-- Where we are --}}
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <x-cards.mapcard src="/images/maps/guinebissau.png" alt="Mapa da Guiné-Bissau" />
                <div class="flex flex-col">
                    <h3>Guiné-Bissau</h3>
                    <span class="flex flex-col break-words">
                        <p class="font-bold">Desde 2011 que focamos a nossa actividade na região mais
                            carenciada da Guiné Bissau, a região de Tombali, e temos a nossa sede da Delegação local na cidade de Catió, que dista
                            cerca de 300 km da capital Bissau.
                        </p>
                        <p>A Guiné-Bissau é um pequeno país da África ocidental constituído por uma
                            parte continental e outra insular que engloba o arquipélago dos Bijagós. A sua superfície é de 36.125 km e tem 1.565,000
                            habitantes. Cerca de 850.000 -55 % são jovens até aos 19 anos (estim. 2017 dados INE Guin- Bissau). É portanto um país com
                            extrema predominância de crianças e jovens, faixas etárias mais frágeis, mas, ao mesmo tempo, aquelas em que melhorias na
                            educação e na saúde se podem revelar mais compensadoras.
                        </p>
                        <p>O rácio de alunos por sala de aula é de 101 alunos/sala.</p>
                    </span>
                </div>
            </div>
        </x-cards.structureWhitOutBg>
    </div>
</x-guestLayout>