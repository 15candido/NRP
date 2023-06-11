<x-guestLayout>
    {{--Page title--}}
    <x-slot name="title">
        {{ ('Relatórios') }}
    </x-slot>
    
    
    <x-section>        
        <x-paragraph title="Relatórios" subtitle='Reports de contas da ONGD "Na Rota dos Povos"'>

        @php
            $years = [2021, 2020, 2019, 2018, 2017, 2016];
            $labels = ['Balanço', 'Parecer do Conselho Fiscal', 'Demonstração de Resultados', 'Relatório da Direção'];
        @endphp
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols4 gap-3 mt-8">
            @foreach ($years as $year)
                <div class="border-solid p-4 border-2 rounded border-nrp-blue">
                    <div class="text-xl text-nrp-blue font-bold">Ano {{ $year }}</div>
                    @foreach ($labels as $label)
                        @php
                            $file = ".pdf";
                            if ($label == "Balanço") $file = "Balanco_" . $year . $file;
                            elseif ($label == "Parecer do Conselho Fiscal") $file = 'Parecer-Conselho-Fiscal_' . $year . $file;
                            elseif ($label == "Demonstração de Resultados") $file = 'Demonstracao-de-Resultados_'  . $year . $file;
                            elseif ($label == "Relatório da Direção") $file = 'Relatorio-da-Direcao_'  . $year .  $file;
                        @endphp
                        <a href="docs/contas/{{$year}}/{{$file}}">
                            <div class="flex hover:opacity-50 cursor-pointer">
                                <img class="h-12 p-2 " src="/images/icons/pdf.svg">
                                <div class="text-md self-center">{{ $label}}</div>
                            </div>
                        </a>
                    @endforeach
                </div>
            @endforeach
        </div>
        {{--
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
            --}}
        </x-paragraph>
    </x-section>
    {{--
    <div class="flex flex-col min-h-screen justify-start items-center">
        <x-page-header src="images/project/carouselreport2.jpg" title="Relatórios de Atividades" fromPage="Quem somos" toPage="Documentos" childPage="Relatórios" alt="Criança está a praticar a leitura" /> <!--about us hero image -->
        <x-cards.structureWhitOutBg>
            <div class="grid grid-flow-row gap-6 ">
                <h3>Relatórios de Contas da ONGD "Na Rota dos Povos"</h3>
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
    --}}
</x-guestLayout>