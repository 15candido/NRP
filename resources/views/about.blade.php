<x-guestLayout>
    {{--Page title--}}
    <x-slot name="title">
        {{ ('Quem Somos') }}
    </x-slot>
    <div class="flex flex-col min-h-screen justify-start items-center">
        <x-cards.page_hero pageName="Quem Somos" image="/images/selected/who_we_are.jpg" />

        <x-section>
            <x-paragraph title="Sobre nós">
                <p>A “Na Rota dos Povos” é uma Organização Não Governamental para o Desenvolvimento (ONGD), criada em 2001, com sede em Matosinhos, Portugal. Toda a nossa atividade é assegurada por voluntários. Atuamos, há mais de 10 anos, no Sul da Guiné-Bissau, sob o lema <b class="text-nrp-blue">“A Educação é o Único Caminho”</b>, com o objetivo de melhorar o desenvolvimento dos povos em zonas mais carenciadas, fora dos grandes centros populacionais.  </p>
                <p>A nossa <b class="text-nrp-blue">missão</b> é apoiar e desenvolver ações para a defesa, elevação e manutenção da qualidade de vida do ser humano e do meio ambiente, através do desenvolvimento de atividades de carácter educativo, social, cultural, ambiental e desportivo.</p>
                <p><b class="text-nrp-blue">Valorizamos</b> a cooperação, o diálogo intercultural e o apoio direto e efetivo a projetos de organizações congéneres nacionais ou internacionais, nomeadamente através da conceção, execução, facilitação e realização de programas em áreas privilegiadas como a educação, o apoio social e a saúde.</p>
            </x-paragraph>

        </x-section>

        <x-section_with_image src="/images/maps/guinebissau.png">
            <x-paragraph title="Sobre a Guiné-Bissau">
                <p>A Guiné-Bissau é um pequeno país da África ocidental constituído por uma parte continental e outra insular que engloba o arquipélago dos Bijagós. A sua superfície é de 36 125 km2 (cerca de 1/3 da área de Portugal) e tem aproximadamente 2 milhões de habitantes (cerca de 1/5 da população portuguesa). 55% dos habitantes são jovens até aos 19 anos (de acordo com dados do Instituto Nacional de Estatística da Guiné- Bissau de 2017). É, portanto, um país com extrema predominância de crianças e jovens, faixas etárias mais frágeis, mas, por outro lado, aquelas em que melhorias na educação e na saúde são mais promissoras.</p>
                <p>O crioulo é considerado a língua nacional e é o meio de comunicação entre os diferentes grupos étnicos. O português, declarada língua oficial, é pouco falado e o seu uso limita-se aos meios oficiais e a um pequeno número de guineenses.</p>
                <p>Cerca de metade da população adulta não sabe ler nem escrever.</p>
                <p>Aproximadamente 66,6% da população vivia abaixo do limiar da pobreza em 2020 (ou seja, com menos de dois dólares norte-americanos por dia).</p>
            </x-paragraph>
        </x-section_with_image>

        <x-section>
            <x-paragraph>
                <p>Desde 2011 que focamos a nossa actividade na região de Tombali, uma das regiões mais carenciadas da Guiné-Bissau. Criámos a nossa sede da delegação local na cidade de Catió, que dista cerca de 300 km da capital Bissau.</p>
            </x-paragraph>
        </x-section>

        <div class="my-8"></div>

    </div>
</x-guestLayout>