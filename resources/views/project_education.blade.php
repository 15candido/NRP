<x-guestLayout>
    {{--Page title--}}
    <x-slot name="title">
        {{ ('Projeto - A Educação é o Único Caminho') }}
    </x-slot>
    <div class="flex flex-col min-h-screen justify-start items-center">
        <x-cards.page_hero pageName="A Educação é o único Caminho" image="/images/project/carouseleducation2.jpg" />
        <x-cards.structureWhitOutBg>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <x-cards.page_card_overview title="A Educação é o Único Caminho" description="A educação é um fator 
                essencial para o desenvolvimento dos povos e a Guiné-Bissau é um caso grave neste campo. Faltam 
                salas de aula, quadros, carteiras e cadeiras. As crianças, que são muitas, estavam na maioria 
                das vezes sentadas em tijolos ou pedras, com um tronco a fazer de mesa e, claro, sem livros nem 
                cadernos. Faltam professores, e estes fazem greves infindáveis. As paredes são de blocos de 
                terra escura, secos ao sol, e os telhados são feitos de zinco ou palha. A fragilidade deste 
                tipo de construção não permite ter janelas com dimensões minimamente razoáveis. As paredes são 
                muito vulneráveis à chuva e também aos insetos rastejantes. Um dos grandes problemas das salas 
                de aulas é a sua fraca luminosidade. Dadas as condições do território envolvente, é difícil 
                manter as salas com aspecto limpo, asseado e atraente para as crianças e professores." />
                <x-cards.image_card image="/images/project/education.jpg" />
            </div>
        </x-cards.structureWhitOutBg>
        <x-cards.structureWithBg>
            <h3>O que foi feito</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
                <x-cards.project_card_completed_tasks title="Angariação" note="Angariamos e distribuímos o conteúdo de 31 contentores de 76,4m3 de capacidade." image="/images/outline/container2.jpg" />
                <x-cards.project_card_completed_tasks title="Salas de aula" note="Equipamos 210 salas de aula com quadros de giz, mesas, cadeiras, armários e portas." image="/images/outline/classroom.jpg" />
                <x-cards.project_card_completed_tasks title="Escolas" note="Apoiamos 50 escolas com tintas, material escolar, brinquedos, livros, onde estudam cerca de 10.000 alunos." image="/images/outline/school.jpg" />
                <x-cards.project_card_completed_tasks title="Reabilitação" note="Pintamos e colocamos placas transparentes para melhor a claridade em quase todas as escolas apoiadas." image="/images/outline/paint2.jpg" />
                <x-cards.project_card_completed_tasks title="Bibliotecas" note="Criamos e montamos 5 bibliotecas com cerca de 10.000 livros, com o apoio da ONGD Portuguesa TABANCA." image="/images/outline/libary.jpg" />
            </div>
        </x-cards.structureWithBg>
    </div>
</x-guestLayout>