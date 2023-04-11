<x-guestLayout>
    {{--Page title--}}
    <x-slot name="title">
        {{ ('História') }}
    </x-slot>
    <div class="flex flex-col min-h-screen justify-start items-center">
        <x-cards.page_hero pageName="A Nossa História" image="/images/project/carouselhistory.jpg" />
        <x-cards.structureWhitOutBg>
            <div class="grid grid-flow-row">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                    {{-- Description --}}
                    <x-cards.page_card_overview title="Ser Humano Cidadão do Mundo" description="Sempre que 
                    partimos em viagem relembramos outra iniciada e nunca acabada, há 100 000 anos, pelo nosso 
                    antepassado comum, que saindo de um remoto lugar em África povoou este ainda Planeta Azul. 
                    Somos todos diferentes e afinal todos iguais. O Ser Humano, movido pela necessidade de 
                    conhecimento, busca cada vez mais expandir as suas fronteiras e superar os seus limites. 
                    Cruzar ontinentes de Norte para Sul de Este para Oeste, desvendar mistérios, viajar pelos 
                    mais belos locais do mundo e conhecer o planeta azul, é um desafio perfeito para nós, unidos
                    pela vontade comum de viver fortes emoções e dar a conhecer a Herança Humana espalhada pelo 
                    Planeta Terra. Há-de ser para o sul que o novo milénio viajará. À procura de convívio, da 
                    amizade, do amor, da tolerância, da solidariedade, do lazer, da criatividade, da justiça, 
                    da inclusão, da harmonia." />

                    {{-- Image --}}
                    <x-cards.image_card image="/images/project/history.jpg" />
                </div>
            </div>
        </x-cards.structureWhitOutBg>
        <x-cards.structureWithBg>
            <h4>Linha de tempo</h4>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
                <x-cards.story_card_timeline note="Em ruas portuguesas, do tempo das conquistas Terra, no passado, de vários reinos(...) que com El Ksar ..." year="1997" image="/images/outline/1997.jpg" />
                <x-cards.story_card_timeline note="As almas daqueles que conheceram Deus pedem às pradarias verdejantes, às belas paisagens, à frescura ..." year="1998" image="/images/outline/1998.jpg" />
                <x-cards.story_card_timeline note="(…) tudo nesta terra é simultaneamente natural e mágico, concreto e abstrato, imóvel e fugidio. Miragem tangível, ..." year="1999" image="/images/outline/1999.jpg" />
                <x-cards.story_card_timeline note="(…) subi a uma alta montanha para além da qual, para norte, se via um fiorde cheio de gelo à deriva ..." year="2000" image="/images/outline/2000.jpg" />
                <x-cards.story_card_timeline note="(...) meu grito de revolta ecoou pelos vales mais longínquos da Terra, atravessou os mares e os oceanos ..." year="2001" image="/images/outline/2001.jpg" />
            </div>
        </x-cards.structureWithBg>
        <x-cards.structureWhitOutBg>
            <strong class="title">Sócios fundadores</strong>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
                <x-cards.founder_card_profiles name="Tito Baião" witness="Lorem ipsum dolor sit amet consectetur, adipisicing elit." image="/images/user/staff/tito.jpg" />
                <x-cards.founder_card_profiles name="João Pedro Pereira" witness="Lorem ipsum dolor sit amet consectetur, adipisicing elit." image="/images/user/staff/pedro.jpg" />
                <x-cards.founder_card_profiles name="Vitor Manuel Lima" witness="Lorem ipsum dolor sit amet consectetur, adipisicing elit." image="/images/user/staff/vitor.jpg" />
                <x-cards.founder_card_profiles name="Catarina Almeida" witness="Lorem ipsum dolor sit amet consectetur, adipisicing elit." image="/images/user/staff/catarina.jpg" />
                <x-cards.founder_card_profiles name="Isabel Pires Dias" witness="Lorem ipsum dolor sit amet consectetur, adipisicing elit." image="/images/user/staff/isabel.jpg" />
            </div>
        </x-cards.structureWhitOutBg>
    </div>
</x-guestLayout>