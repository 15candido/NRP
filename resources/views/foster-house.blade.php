<x-guestLayout>
    {{--Page title--}}
    <x-slot name="title">
        {{ ('Projeto - Casa da Mamé') }}
    </x-slot>
    <div class="flex flex-col min-h-screen justify-start items-center">
        <x-page-header src="img/project/carouselhouse.jpg" title="Casa da Mamé" fromPage="Projetos" toPage="Casa da mamé" alt="Imagem da Na Rota dos Povos" /> <!--about us hero image -->
        <x-cards.structureWhitOutBg>
            <div class="grid grid-flow-row py-20 gap-6 lg:gap-20">
                <x-cards.menu />
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div class="flex flex-col w-full h-auto gap-4 ">
                        <x-cards.info-default-card title="Casa da Mamé" description="Identificando uma necessidade urgente de apoio aos órfãos em Catió (crianças cuja mãe havia 
                            morrido ao dar à luz), a Rota dos Povos decidiu, em 2017, criar uma casa de acolhimento - a Casa da Mamé, 
                            que funciona na cidade de Catió.
                            A Casa da Mamé é uma casa coração que acolhe crianças cuja mãe morreu durante o parto. É uma casa que permite 
                            às crianças ter um lar, comida, a possibilidade de brincar, acesso à educação e um abraço de amor. É gerida 
                            diariamente a partir de Portugal, e inteiramente financiada por donativos de particulares e empresas (Firquidjas).
                            A casa acolhe e tutela 15 crianças de ambos os sexos, a sua capacidade máxima, em todas as dimensões de sua vida 
                            (proteção, assistência, educação, etc.). Empregamos e remuneramos 12 pessoas de Catió na Casa da Mamé, 
                            designadamente amas, cozinheira, lavadeira, responsável e jardineiro." />
                    </div>
                    <x-cards.imagecard src="img/project/house.jpg" alt="Imagem da escola" />
                </div>
            </div>
        </x-cards.structureWhitOutBg>
        <x-cards.structureWithBg>
            <div class="py-0">
                <div class="space-y-8">
                    <h3>O que foi feito</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
                        <x-cards.outline title="Espaço" src="img/outline/house.jpg" alt="Casa da Mamé" abstract="Construímos um orfanato com capacidade para acolher 15 crianças de ambos os sexos." />
                        <x-cards.outline title="Stock" src="img/outline/stock.jpg" alt="Stock de alimentos" abstract="Fornecemos, regularmente, alimentos a Casa da Mamé: arroz, massa, azeite, óleo, 
                            papas lácteas, leite nido, ..." />
                        <x-cards.outline title="Colaboradores" src="img/outline/team.jpg" alt="Colaboradores" abstract="Empregamos e remuneramos 15 funcionários em Catió na Casa da Mamé, designadamente 
                            amas, ..." />
                        <x-cards.outline title="Parque infantil" src="img/outline/park.jpg" alt="Parque de infantil" abstract="Criamos um parque infantil, um espaço ao ar livre onde as nossas crianças pudessem brincar." />
                        <x-cards.outline title="Sala de estudo" src="img/outline/studyhall.jpg" alt="Sala de estudo" abstract="Temos uma sala de estudo onde as nossas crianças pudessem realizar as atividades lúdicas, 
                            pedagógicas..." />
                    </div>
                </div>
            </div>
        </x-cards.structureWithBg>
        <!-- <x-cards.structureWhitOutBg>
            <div class="py-20">
                <div class="space-y-8">
                    <h3>Testemunho</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
                        <x-cards.witness name="N'Simble" role="Colaboradora" witness="Lorem ipsum dolor sit amet consectetur, adipisicing elit." src="img/user/menprofile.jpg" alt="Foto de perfil" />
                        <x-cards.witness name="Manuela Néné" role="Voluntário" witness="Lorem ipsum dolor sit amet consectetur, adipisicing elit." src="img/user/menprofile.jpg" alt="Foto de perfil" />
                        <x-cards.witness name="Cadija Fal" role="Familar" witness="Lorem ipsum dolor sit amet consectetur, adipisicing elit." src="img/user/menprofile.jpg" alt="Foto de perfil" />
                        <x-cards.witness name="Biamsum Siga" role="Voluntário" witness="Lorem ipsum dolor sit amet consectetur, adipisicing elit." src="img/user/menprofile.jpg" alt="Foto de perfil" />
                        <x-cards.witness name="Biamsum Siga" role="Voluntário" witness="Lorem ipsum dolor sit amet consectetur, adipisicing elit." src="img/user/menprofile.jpg" alt="Foto de perfil" />
                    </div>
                </div>
            </div>
        </x-cards.structureWhitOutBg> -->
    </div>
</x-guestLayout>