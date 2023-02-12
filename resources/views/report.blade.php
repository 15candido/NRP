<x-guestLayout>
    {{--Page title--}}
    <x-slot name="title">
        {{ ('Relatório') }}
    </x-slot>
    <div class="flex flex-col min-h-screen justify-start items-center">
        <x-page-header src="images/project/carouselEducation.jpg" title="Um quadro para Catió" fromPage="Quem somos" toPage="Documentos" childPage="Um quadro para Catió" alt="Criança está a praticar a leitura" /> <!--about us hero image -->
        <x-cards.structureWhitOutBg>
            <div class="flex flex-col lg:flex-row justify-start items-start py-20 gap-10">
                <div class="flex flex-col w-full h-auto gap-4">
                    <h4 class="font-black text-sm text-gray-400 uppercase">Relatório</h4>
                    <x-cards.info-default-card title="10.000 estojos para Catió" description="
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, neque ipsa in, quis velit nobis 
                            voluptas fugit nihil accusantium quidem labore molestiae blanditiis soluta reprehenderit ex facere, 
                            quas dolore accusamus!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, neque ipsa in, quis velit nobis 
                            voluptas fugit nihil accusantium quidem labore molestiae blanditiis soluta reprehenderit ex facere, 
                            quas dolore accusamus!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, neque ipsa in, quis velit nobis 
                            voluptas fugit nihil accusantium quidem labore molestiae blanditiis soluta reprehenderit ex facere, 
                            quas dolore accusamus!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, neque ipsa in, quis velit nobis 
                            voluptas fugit nihil accusantium quidem labore molestiae blanditiis soluta reprehenderit ex facere, 
                            quas dolore accusamus!
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, neque ipsa in, quis velit nobis 
                            voluptas fugit nihil accusantium quidem labore molestiae blanditiis soluta reprehenderit ex facere, 
                            quas dolore accusamus!" />
                    <div class="flex mb-4 justify-between font-black text-xs text-gray-400 uppercase">
                        <span>
                            <a>Tipo - </a> <a>projeto</a>
                        </span>
                        <span>
                            <a>Ano - </a> <a>2022</a>
                        </span>
                        <span>
                            <a>Autor - </a> <a>Na Rota dos Povos</a>
                        </span>
                        <span>
                            <a>Línguas - </a> <a>Português, Inglês</a>
                        </span>
                    </div>
                    <div>
                        <x-buttons.button>Ver & Download</x-buttons.button>
                    </div>
                </div>
                <div class="w-[700px] h-full">
                    <x-cards.imagecard src="images/project/reporting.jpg" alt="Relatório do projeto 10.000 estojos para Catió" />
                </div>
            </div>
        </x-cards.structureWhitOutBg>
    </div>
</x-guestLayout>