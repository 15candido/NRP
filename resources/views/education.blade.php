<x-guestLayout>
    {{--Page title--}}
    <x-slot name="title">
        {{ ('Projeto - Educação') }}
    </x-slot>
    <div class="flex flex-col min-h-screen justify-start items-center">
        <x-page-header src="images/project/carouseleducation2.jpg" title="A Educação é o único Caminho" fromPage="Projetos" toPage="A Educação é o Único Caminho" alt="Criança está a praticar a leitura" /> <!--about us hero image -->
        <x-cards.structureWhitOutBg>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <x-cards.info-default-card title="A Educação é o Único Caminho" description="A educação é um fator essencial para o 
                    desenvolvimento dos povos e a Guiné-Bissau é um caso grave neste campo. Faltam salas de aula, quadros, carteiras 
                    e cadeiras. As crianças, que são muitas, estavam na maioria das vezes sentadas em tijolos ou pedras, com um tronco
                    a fazer de mesa e, claro, sem livros nem cadernos. Faltam professores, e estes fazem greves infindáveis. As 
                    paredes são de blocos de terra escura, secos ao sol, e os telhados são feitos de zinco ou palha. A fragilidade 
                    deste tipo de construção não permite ter janelas com dimensões minimamente razoáveis. As paredes são muito 
                    vulneráveis à chuva e também aos insetos rastejantes. Um dos grandes problemas das salas de aulas é a sua fraca 
                    luminosidade. Dadas as condições do território envolvente, é difícil manter as salas com aspecto limpo, asseado 
                    e atraente para as crianças e professores." />
                <x-cards.imagecard src="images/project/education.jpg" alt="Imagem da escola" />
            </div>
        </x-cards.structureWhitOutBg>
        <x-cards.structureWithBg>
            <h4>O que foi feito</h4>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
                <x-cards.outline title="Angariação" src="images/outline/container2.jpg" alt="Descarga do contentor" abstract="Angariamos e distribuímos o conteúdo de 31 contentores de 76,4m3 de capacidade." />
                <x-cards.outline title="Salas de aula" src="images/outline/classroom.jpg" alt="sala de aula" abstract="Equipamos 210 salas de aula com quadros de giz, mesas, cadeiras, armários e portas." />
                <x-cards.outline title="Escolas" src="images/outline/school.jpg" alt="Escolas apoiadas" abstract="Apoiamos 50 escolas com tintas, material escolar, brinquedos, livros, onde estudam cerca de 10.000 alunos." />
                <x-cards.outline title="Reabilitação" src="images/outline/paint2.jpg" alt="Pinturas das escolas" abstract="Pintamos e colocamos placas transparentes para melhor a claridade em quase todas as escolas apoiadas." />
                <x-cards.outline title="Bibliotecas" src="images/outline/libary.jpg" alt="Biblioteca infantil" abstract="Criamos e montamos 5 bibliotecas com cerca de 10.000 livros, com o apoio da ONGD Portuguesa TABANCA." />
            </div>
        </x-cards.structureWithBg>
    </div>
</x-guestLayout>