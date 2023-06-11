<x-guestLayout>
    {{--Page title--}}
    <x-slot name="title">
        {{ ('Projeto - Centro de Educação  Especial e Terapêutica') }}
    </x-slot>

    <x-cards.page_hero pageName="CEET" image="/images/selected/ceet.jpg" />
    
    <x-section>        
        <x-paragraph title="Centro de Educação Especial e Terapêutica" subtitle="Tabanca dos Pequenitos">
            <p>O Centro de Educação Especial e Terapêutica foi inaugurado em fevereiro de 2023. É um centro totalmente equipado, dedicado ao diagnóstico, tratamento e melhoria da qualidade de vida de crianças com deficiência. Complementa a sua ação disponibilizando educação escolar básica e alimentação. Numa primeira fase, está a acolher 12 crianças com deficiência física e/ou desenvolvimento cognitivo prejudicado. São fornecidas a estas crianças terapias adequadas, educação especial, cuidados de saúde específicos e alimentação diária.</p>
            <p>A surdez e a cegueira são outras áreas de atuação esperadas.</p>
            <p>O espaço permite a realização de consultas e o acompanhamento online das crianças e dos terapeutas por médicos e outros técnicos de saúde a partir de Portugal.</p>
        </x-paragraph>
    </x-section>

    {{--<div class="flex flex-col min-h-screen justify-start items-center">
        <x-cards.structureWhitOutBg>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <x-cards.page_card_overview title="Centro de Educação  Especial e Terapêutica" description="O Centro de Educação 
                Especial e Terapêutico é um centro totalmente equipado, dedicado ao diagnóstico, tratamento e incremento da 
                qualidade de vida das crianças com deficiência, que complementa a sua ação disponibilizando educação escolar
                 básica e alimentação. Numa primeira fase, iremos atender 40 crianças com deficiência física e/ou 
                 desenvolvimento cognitivo prejudicado. A surdez e a cegueira são outras áreas de atuação esperadas. 
                 Esperamos fornecer a estas crianças terapias adequadas, educação especial, cuidados de saúde específicos e 
                 alimentação diária. O espaço está dotado de equipamento diversificado, sem qualquer paralelo na 
                 Guiné-Bissau, um espaço funcional que permite a realização de consultas e o acompanhamento online das 
                 crianças e dos terapeutas por médicos e outros técnicos de saúde a partir de Portugal." />
                <x-cards.image_card image="/images/project/ceet.jpg" />
            </div>
        </x-cards.structureWhitOutBg>
        <x-cards.structureWithBg>
            <h3>O que foi feito</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
                <x-cards.project_card_completed_tasks title="Espaço" note="Construímos uma instalação com capacidade para atender 40 crianças com deficiência." image="/images/outline/ceet.jpg" />
                <x-cards.project_card_completed_tasks title="Bungalow" note="Construímos um bungalow, espaço ao ar livre onde estas crianças podem realizar as atividades lúdicas, ..." image="/images/outline/bungalow.jpg" />
                <x-cards.project_card_completed_tasks title="Equipamentos" note="Dotamos já este espaço de equipamento diversificado, sem qualquer paralelo na Guiné-Bissau." image="/images/outline/equipment.jpg" />
                <x-cards.project_card_completed_tasks title="Profissionais" note="Recrutamos e demos a formação a uma equipa de profissionais que irá prestar serviços no centro." image="/images/outline/profissional.jpg" />
                <x-cards.project_card_completed_tasks title="Serviços" note="Fornecemos terapias adequadas, educação especial, cuidados de saúde específicos e alimentação ..." image="/images/outline/therapy.jpg" />
            </div>
        </x-cards.structureWithBg>
    </div>
    --}}
</x-guestLayout>