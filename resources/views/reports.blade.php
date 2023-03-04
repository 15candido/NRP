<x-guestLayout>
    {{--Page title--}}
    <x-slot name="title">
        {{ ('Relatórios') }}
    </x-slot>
    <div class="flex flex-col min-h-screen justify-start items-center">
        <x-page-header src="images/project/carouselreport2.jpg" title="Relatórios de Atividades" fromPage="Quem somos" toPage="Documentos" childPage="Relatórios" alt="Criança está a praticar a leitura" /> <!--about us hero image -->
        <x-cards.structureWhitOutBg>
            <div class="grid grid-flow-row gap-6 ">
                <h3>CONSULTE OS NOSSOS RELATÓRIOS DE ATIVIDADES</h3>
                <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
                    <x-reports.report title="Um Quadro para Catió" year="2022" category="Evento" image="images/project/art_board.jpg" alt="Imagem da escola" />
                    <x-reports.report title="Todos Os Rostos Escondem Histórias" year="2022" category="Publicação" image="images/project/report.jpg" alt="Imagem da escola" />
                    <x-reports.report title="Sorrisos Com Algumas Lágrimas Da Guiné-Bissau" year="2022" category="Publicação" image="images/project/report.jpg" alt="Imagem da escola" />
                    <x-reports.report title="Casa da Mamé" year="2021" category="Projeto" image="images/project/report.jpg" alt="Imagem da escola" />
                    <x-reports.report title="Centro de Educação Especial e Terapêutico" year="2021" category="Projeto" image="images/project/report.jpg" alt="Imagem da escola" />
                    <x-reports.report title="A Educação é o Único Caminho" year="2020" category="Projeto" image="images/project/report.jpg" alt="Imagem da escola" />
                    <x-reports.report title="A Educação é o Único Caminho" year="2020" category="Projeto" image="images/project/report.jpg" alt="Imagem da escola" />
                    <x-reports.report title="A Educação é o Único Caminho" year="2020" category="Projeto" image="images/project/report.jpg" alt="Imagem da escola" />
                </div>
            </div>
        </x-cards.structureWhitOutBg>
    </div>
</x-guestLayout>