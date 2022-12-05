<x-guestLayout> 
    {{--Page title--}}
    <x-slot name="title">
        {{ ('História') }}
    </x-slot>
    <div class="flex flex-col min-h-screen justify-start items-center">
        <x-page-header 
            src="img/ProjectImg/carouselHistory.jpg"
            title="A Nossa História" fromPage="Quem somos" toPage="A nossa história"
            alt="Viagens"
        /> <!--about us hero image -->
        <x-cards.structureWhitOutBg>
            <div class="grid grid-flow-row py-20 gap-6 lg:gap-20">
                <x-cards.menu/>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div class="flex flex-col w-full h-auto gap-4 ">
                        <x-cards.info-default-card 
                            title="Ser Humano Cidadão do Mundo"
                            description="Sempre que partimos em viagem relembramos outra iniciada e nunca acabada, há 100 000 
                            anos, pelo nosso antepassado comum, que saindo de um remoto lugar em África povoou este ainda 
                            Planeta Azul. Somos todos diferentes e afinal todos iguais.
                            O Ser Humano, movido pela necessidade de conhecimento, busca cada vez mais expandir as suas 
                            fronteiras e superar os seus limites. Cruzar Continentes de Norte para Sul de Este para Oeste, 
                            desvendar mistérios, viajar pelos mais belos locais do mundo e conhecer o planeta azul, é um desafio perfeito para nós, unidos pela vontade comum de viver fortes emoções e dar a conhecer a Herança Humana espalhada pelo Planeta Terra.
                            Há-de ser para o sul que o novo milénio viajará. À procura de convívio, da amizade, do amor, da 
                            tolerância, da solidariedade, do lazer, da criatividade, da justiça, da inclusão, da harmonia."
                        />                 
                    </div>
                    <x-cards.imagecard 
                        src="img/projectImg/history.jpg"
                        alt="Corredor - Centro de Educação Especial e Terapêutica"
                    />
                </div>
            </div>
        </x-cards.structureWhitOutBg>
        <x-cards.structureWithBg>
            <div class="py-0">
                <div class="space-y-8">
                    <h3>Linha de tempo</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
                        <x-cards.outline 
                            title="1997"
                            src="img/outline/1997.jpg"
                            alt="Instalação do Centro de Educação Especial e Terapêutica"
                            abstract="Em ruas portuguesas, do tempo das conquistas Terra, no passado, de vários reinos(...) que
                            com El Ksar ... "
                        />
                        <x-cards.outline 
                            title="1998"
                            src="img/outline/1998.jpg"
                            alt="Colaboradores"
                            abstract="As almas daqueles que conheceram Deus pedem às pradarias verdejantes, às belas paisagens, à 
                            frescura ..."
                        />
                        <x-cards.outline 
                            title="1999"
                            src="img/outline/1999.jpg"
                            alt="Equipamentos"
                            abstract="…tudo nesta terra é simultaneamente natural e mágico, concreto e abstrato, imóvel e 
                            fugidio. Miragem tangível, ..."
                        />
                        <x-cards.outline 
                            title="2000"
                            src="img/outline/2000.jpg"
                            alt="Profissionais do centro"
                            abstract="(…) subi a uma alta montanha para além da qual, para norte, se via um fiorde cheio de 
                            gelo à deriva ..."
                        />                      
                        <x-cards.outline 
                            title="2001"
                            src="img/outline/2001.jpg"
                            alt="Serviços Prestados"
                            abstract="(...) meu grito de revolta ecoou pelos vales mais longínquos da Terra, atravessou os mares
                            e os oceanos ..."
                        />
                    </div>
                </div>
            </div>
        </x-cards.structureWithBg>
        <x-cards.structureWhitOutBg>
            <div class="py-20">
                <div class="space-y-8">
                    <h3>Sócios fundadores</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
                        <x-cards.witness 
                            name="Tito Baião"
                            witness="Lorem ipsum dolor sit amet consectetur, adipisicing elit."
                            src="img/user/staff/tito.jpg"
                            alt="Foto de perfil"
                        />
                        <x-cards.witness 
                            name="João Pedro Pereira"
                            witness="Lorem ipsum dolor sit amet consectetur, adipisicing elit."
                            src="img/user/staff/pedro.jpg"
                            alt="Foto de perfil"
                        />
                        <x-cards.witness 
                            name="Vitor Manuel Lima"
                            witness="Lorem ipsum dolor sit amet consectetur, adipisicing elit."
                            src="img/user/staff/vitor.jpg"
                            alt="Foto de perfil"
                        />
                        <x-cards.witness 
                            name="Catarina Almeida"
                            witness="Lorem ipsum dolor sit amet consectetur, adipisicing elit."
                            src="img/user/staff/catarina.jpg"
                            alt="Foto de perfil"
                        />
                        <x-cards.witness 
                            name="Isabel Pires Dias"
                            witness="Lorem ipsum dolor sit amet consectetur, adipisicing elit."
                            src="img/user/staff/isabel.jpg"
                            alt="Foto de perfil"
                        />
                    </div>
                </div>
            </div>
        </x-cards.structureWhitOutBg>
    </div>
</x-guestLayout>