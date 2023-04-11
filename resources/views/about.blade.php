<x-guestLayout>
    {{--Page title--}}
    <x-slot name="title">
        {{ ('Quem Somos') }}
    </x-slot>
    <div class="flex flex-col min-h-screen justify-start items-center">
        <x-cards.page_hero pageName="Quem Somos" image="/images/project/carouselus2.jpg" />
        <x-cards.structureWhitOutBg>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                {{-- Short description --}}
                <x-cards.page_card_overview title="A Na Rota dos Povos" description="É uma ONGD – Organização 
                Não Governamental para o Desenvolvimento, criada em 2001, com sede em Matosinhos. Toda a sua 
                atividade é assegurada por voluntários. Atua há mais de 10 anos no Sul da Guiné-Bissau, sob o 
                lema A Educação é o Único Caminho, contribuindo em vários setores da sociedade e dando apoio à 
                comunidade, com participação ativa na identificação de problemas e na sua resolução, mantendo
                como principais áreas de intervenção a educação, o apoio social e a saúde." />

                {{-- Image --}}
                <x-cards.image_card image="images/team/team.jpg" />
            </div>
        </x-cards.structureWhitOutBg>
        <x-cards.structureWithBg>
            {{-- Mission, vision and value section  --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 overflow-hidden">

                {{-- Mission --}}
                <x-cards.page_card_title title="Missão" description="A nossa missão é apoiar o desenvolvimento 
                dos países PALOP, fora dos grandes centros populacionais, em zonas carenciadas ao nível da educação, 
                formação cultural, saúde, proteção infantil e do ambiente." />

                {{-- Vision --}}
                <x-cards.page_card_title title="Visão" description="Temos como objetivo apoiar e desenvolver 
                ações para a defesa, elevação e manutenção da qualidade de vida do ser humano e do meio ambiente,
                através do desenvolvimento de atividades de caráter educativo, social, cultural, ambiental e 
                desportivo." />

                {{-- Valeus --}}
                <x-cards.page_card_title title="Valores" description='Temos presente que só a educação pode 
                melhorar o desenvolvimento dos povos, daí o nosso lema “A Educação é o Único Caminho"' />

            </div>
        </x-cards.structureWithBg>
        <x-cards.structureWhitOutBg>
            {{-- Where we are --}}
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <x-cards.map_card image="/images/maps/guinebissau.png" alt="Mapa da Guiné-Bissau" />
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