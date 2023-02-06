<x-guestLayout>
    {{--Page title--}}
    <x-slot name="title">
        {{ ('Projeto - Educação') }}
    </x-slot>
    <div class="flex flex-col min-h-screen justify-start items-center">
        <x-page-header src="img/project/carouseleducation.jpg" title="A Educação é o único Caminho" fromPage="Projetos" toPage="A Educação é o Único Caminho" alt="Criança está a praticar a leitura" /> <!--about us hero image -->
        <x-cards.structureWhitOutBg>
            <div class="grid grid-flow-row py-20 gap-6 lg:gap-20">
                <x-cards.menu />
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div class="flex flex-col w-full h-auto gap-4">
                        <x-cards.info-default-card title="A Educação é o Único Caminho" description="A educação é um fator essencial para o desenvolvimento dos povos e a 
                            Guiné-Bissau é um caso grave neste campo. Faltam salas de aula, quadros, carteiras 
                            e cadeiras. As crianças, que são muitas, estavam na maioria das vezes sentadas em 
                            tijolos ou pedras, com um tronco a fazer de mesa e, claro, sem livros nem cadernos. 
                            Faltam professores, e estes fazem greves infindáveis. As paredes são de blocos de 
                            terra escura, secos ao sol, e os telhados são feitos de zinco ou palha. A fragilidade 
                            deste tipo de construção não permite ter janelas com dimensões minimamente razoáveis. 
                            As paredes são muito vulneráveis à chuva e também aos insetos rastejantes. 
                            Um dos grandes problemas das salas de aulas é a sua fraca luminosidade. 
                            Dadas as condições do território envolvente, é difícil manter as salas com aspecto 
                            limpo, asseado e atraente para as crianças e professores." />
                    </div>
                    <x-cards.imagecard src="img/project/education.jpg" alt="Imagem da escola" />
                </div>
            </div>
        </x-cards.structureWhitOutBg>
        <x-cards.structureWithBg>
            <div class="py-0">
                <div class="space-y-4">
                    <h3>O que foi feito</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
                        <x-cards.outline title="Angariação" src="img/outline/container.jpg" alt="Descarga do contentor" abstract="Angariamos e distribuímos o conteúdo de 31 contentores de 76,4m3 de capacidade." />
                        <x-cards.outline title="Salas de aula" src="img/outline/classRoom.jpg" alt="sala de aula" abstract="Equipamos 210 salas de aula com quadros de giz, mesas, cadeiras, armários e portas." />
                        <x-cards.outline title="Escolas" src="img/outline/school.jpg" alt="Escolas apoiadas" abstract="Apoiamos 50 escolas com tintas, material escolar, brinquedos, livros, onde estudam cerca de 10.000 alunos." />
                        <x-cards.outline title="Reabilitação" src="img/outline/paint.jpg" alt="Pinturas das escolas" abstract="Pintamos e colocamos placas transparentes para melhor a claridade em quase todas as escolas apoiadas." />
                        <x-cards.outline title="Bibliotecas" src="img/outline/libary.jpg" alt="Biblioteca infantil" abstract="Criamos e montamos 5 bibliotecas com cerca de 10.000 livros, com o apoio da ONGD Portuguesa TABANCA." />
                    </div>
                </div>
            </div>
        </x-cards.structureWithBg>
        <!-- <x-cards.structureWhitOutBg>
            <div class="py-20">
                <div class="space-y-4">
                    <h3>Testemunho</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
                        <x-cards.witness name="Biamsum Siga" role="Diretor" school="Gansola Porto" witness="Lorem ipsum dolor sit amet consectetur, adipisicing elit." src="img/user/menprofile.jpg" alt="Foto de perfil" />
                        <x-cards.witness name="Biamsum Siga" role="Professor" school="Gansola Porto" witness="Lorem ipsum dolor sit amet consectetur, adipisicing elit." src="img/user/menprofile.jpg" alt="Foto de perfil" />
                        <x-cards.witness name="Biamsum Siga" role="Diretor" school="Gansola Porto" witness="Lorem ipsum dolor sit amet consectetur, adipisicing elit." src="img/user/menprofile.jpg" alt="Foto de perfil" />
                        <x-cards.witness name="Biamsum Siga" role="Professor" school="Gansola Porto" witness="Lorem ipsum dolor sit amet consectetur, adipisicing elit." src="img/user/menprofile.jpg" alt="Foto de perfil" />
                        <x-cards.witness name="Biamsum Siga" role="Diretor" school="Gansola Porto" witness="Lorem ipsum dolor sit amet consectetur, adipisicing elit." src="img/user/menprofile.jpg" alt="Foto de perfil" />
                    </div>
                </div>
            </div>
        </x-cards.structureWhitOutBg> -->
    </div>
</x-guestLayout>