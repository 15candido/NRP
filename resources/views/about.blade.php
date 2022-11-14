<x-guestLayout> 
    <div class="flex flex-col min-h-screen justify-start items-center">
        <x-page-header 
            src="img/ProjectImg/carouselUs.jpg"
            title="Quem Somos" fromPage="Home" toPage="Quem Somos"
            alt="Imagem da Na Rota dos Povos"
        /> <!--about us hero image -->
        <x-cards.structureWhitOutBg>
            <div class="grid grid-flow-row py-20 gap-6 lg:gap-12">
                <x-cards.menu/>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div class="flex flex-col w-full h-auto gap-4">
                        <x-cards.info-default-card 
                            title="Sobre nós"
                            description="A Na Rota dos Povos é uma ONGD – Organização Não Governamental para o
                             Desenvolvimento, criada em 2001, com sede em Matosinhos. 
                            Toda a sua atividade é assegurada por voluntários.
                            Atua há mais de 10 anos no Sul da Guiné-Bissau, sob o lema A Educação é o Único Caminho,
                            contribuindo em vários setores da sociedade e dando apoio à comunidade, com participação ativa 
                            na identificação de problemas e na sua resolução, mantendo como principais áreas de intervenção
                            a educação, o apoio social e a saúde.
                            "
                        />                 
                    </div>
                    <x-cards.imagecard 
                        src="img/team/team.jpg"
                        alt="Imagem dos voluntários em ação"
                    />
                </div>
                <div class="flex flex-col md:flex-row w-full h-full gap-6">
                    <x-cards.infocard 
                        title="Missão"
                        description="Temos presente que só a educação pode melhorar o 
                        desenvolvimento dos povos, daí o nosso lema “A Educação é o Único Caminho”."
                    />
                    <x-cards.infocard 
                        title="Visão"
                        description="Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                        Debitis maiores porro excepturi recusandae unde, error commodi nam!"
                    />
                    <x-cards.infocard 
                        title="Valores"
                        description="Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                        Debitis maiores porro excepturi recusandae unde, error commodi nam!"
                    />
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <x-cards.mapcard 
                        src="img/maps/guinebissau.png"
                        alt="Mapa da Guiné-Bissau"
                    />
                    <div class="flex flex-col w-full h-full gap-4">
                        <x-cards.info-default-card 
                            subtitle="Guiné-Bissau"
                            abstract="Desde 2011 que focamos a nossa actividade na região mais carenciada da Guiné Bissau, a região de
                                Tombali, e temos a nossa sede da Delegação local na cidade de Catió, que dista cerca de 300 km da
                                capital Bissau."
                            description="A Guiné-Bissau é um pequeno país da África ocidental constituído por uma parte continental e 
                            outra insular que engloba o arquipélago dos Bijagós. A sua superfície é de 36.125 km e tem 1.565,000 habitantes.
                            Cerca de 850.000 -55 %- são jovens até aos 19 anos (estim. 2017 dados INE Guin- Bissau). É portanto um país com 
                            extrema predominância de crianças e jovens, faixas etárias mais frágeis, mas, ao mesmo tempo, aquelas em que 
                            melhorias na educação e na saúde se podem revelar mais compensadoras."
                            ratio="O rácio de alunos por sala de aula é de 101 alunos/sala."
                        />                 
                    </div>
                </div>
            </div>
        </x-cards.structureWhitOutBg>
    </div>
</x-guestLayout>