<x-guestLayout>
    {{--Page title--}}
    <x-slot name="title">
        {{ ('Projeto - CEET') }}
    </x-slot>
    <div class="flex flex-col min-h-screen justify-start items-center">
        <x-page-header src="images/project/carouselceet.jpg" title="Centro de Educação Especial e Terapêutico" fromPage="Projetos" toPage="CEET" alt="Espaço CEET" /> <!--about us hero image -->
        <x-cards.structureWhitOutBg>
            <div class="grid grid-flow-row py-20 gap-6 lg:gap-20">
                <x-cards.menu />
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <div class="flex flex-col w-full h-auto gap-4 ">
                        <x-cards.info-default-card title="CEET" description="O Centro de Educação Especial e Terapêutico é um centro totalmente equipado, 
                            dedicado ao diagnóstico, tratamento e incremento da qualidade de vida das crianças com 
                            deficiência, que complementa a sua ação disponibilizando educação escolar básica e alimentação. 
                            Numa primeira fase, iremos atender 40 crianças com deficiência física e/ou desenvolvimento 
                            cognitivo prejudicado. A surdez e a cegueira são outras áreas de atuação esperadas. Esperamos 
                            fornecer a estas crianças terapias adequadas, educação especial, cuidados de saúde específicos 
                            e alimentação diária. O espaço está dotado de equipamento diversificado, sem qualquer paralelo 
                            na Guiné-Bissau, um espaço funcional que permite a realização de consultas e o acompanhamento 
                            online das crianças e dos terapeutas por médicos e outros técnicos de saúde a partir de Portugal." />
                    </div>
                    <x-cards.imagecard src="images/project/ceet_center.jpg" alt="Corredor - Centro de Educação Especial e Terapêutica" />
                </div>
            </div>
        </x-cards.structureWhitOutBg>
        <x-cards.structureWithBg>
            <div class="py-0">
                <div class="space-y-8">
                    <h3>O que foi feito</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
                        <x-cards.outline title="Espaço" src="images/outline/ceet.jpg" alt="Instalação do Centro de Educação Especial e Terapêutica" abstract="Construímos uma instalação com capacidade para atender 40 crianças com deficiência." />
                        <x-cards.outline title="Bungalow" src="images/outline/bungalow.jpg" alt="Colaboradores" abstract="Construímos um bungalow, espaço ao ar livre onde estas crianças podem realizar as atividades lúdicas, ..." />
                        <x-cards.outline title="Equipamentos" src="images/outline/equipment.jpg" alt="Equipamentos" abstract="Dotamos já este espaço de equipamento diversificado, sem qualquer paralelo na Guiné-Bissau
                            ." />
                        <x-cards.outline title="Profissionais" src="images/outline/profissional.jpg" alt="Profissionais do centro" abstract="Recrutamos e demos a formação a uma equipa de profissionais que irá prestar serviços no centro." />
                        <x-cards.outline title="Serviços" src="images/outline/therapy.jpg" alt="Serviços Prestados" abstract="Fornecemos terapias adequadas, educação especial, cuidados de saúde específicos e alimentação ..." />
                    </div>
                </div>
            </div>
        </x-cards.structureWithBg>
    </div>
</x-guestLayout>