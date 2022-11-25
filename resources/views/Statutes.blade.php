<x-guestLayout> 
    <div class="flex flex-col min-h-screen justify-start items-center">
        <x-page-header 
            src="img/ProjectImg/carouselstatutes.jpg"
            title="Estatutos" fromPage="Quem somos" toPage="Documentos" childPage="Estatutos"
            alt="Estatutos"
        /> <!--about us hero image -->
        <x-cards.structureWhitOutBg>
            <div class="flex flex-col lg:flex-row justify-start items-start py-20 gap-10">
                    <div class="flex flex-col w-full h-auto gap-4">
                        <h4 class="font-black text-sm text-gray-400 uppercase">Estatutos</h4>
                        <x-cards.info-default-card 
                            title="Estatutos da Na Rota dos Povos"
                            description="
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
                            quas dolore accusamus!"
                        /> 
                        <div class="flex mb-4 justify-between font-black text-xs text-gray-400 uppercase">
                            <span>
                                <a>Autor: </a> <a>Na Rota dos Povos</a>
                            </span>
                            <span>
                                <a>Aprovação: </a> <a>26 de Março de 2022</a>
                            </span>
                            <span>
                                <a>Artigos: </a> <a>55º</a>
                            </span>
                            <span>
                                <a>Línguas: </a> <a>Português</a>
                            </span>
                        </div>   
                        <div>
                            <x-button.button>Download</x-button.button>
                        </div>             
                    </div>
                    <div class="w-[700px] h-full">
                        <x-cards.imagecard
                            src="img/ProjectImg/reporting.jpg"
                            alt="Relatório do projeto 10.000 estojos para Catió"
                        />
                    </div>
            </div>
        </x-cards.structureWhitOutBg>
    </div>
</x-guestLayout>
