<x-guestLayout>
    {{--Page title--}}
    <x-slot name="title">
        {{ ('Projeto - Apoio à saúde') }}
    </x-slot>
    <div class="flex flex-col min-h-screen justify-start items-center">
        <x-cards.page_hero pageName="Apoio à saúde" image="/images/project/carouselhealth.jpg" />
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
                <x-cards.image_card image="/images/project/health.jpg" />
            </div>
        </x-cards.structureWhitOutBg>
        <x-cards.structureWithBg>
            <h3>O que foi feito</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
                <x-cards.project_card_completed_tasks title="Medicamentos" note="O nosso apoio traduz-se no aporte de vários medicamentos para uso interno, material médico e muitos consumíveis ..." image="/images/outline/medication.jpg" />
                <x-cards.project_card_completed_tasks title="Monitor" note="Entregamos, na ala de enfermagem do Hospital Musna Sambú, o monitor de sinais vitais. O equipamento vai ..." image="/images/outline/monitor.jpg" />
                <x-cards.project_card_completed_tasks title="Incubadora" note="Instalamos uma estação de reanimação neo-natal, colocamos ao serviço do hospital e da comunidade uma incubadora ..." image="/images/outline/incubator.jpg" />
                <x-cards.project_card_completed_tasks title="Camas" note="Entregamos camas hospitalares com objetivo de melhor as condições e garantir o conforto dos doentes ..." image="/images/outline/hospital_beds.jpg" />
                <x-cards.project_card_completed_tasks title="Cisterna" note="Recuperamos a cisterna de água e o poço, e instalamos 4 pontos de acesso a água, só existia um em todo o edifício ..." image="/images/outline/cistern.jpg" />
            </div>
        </x-cards.structureWithBg>
    </div>
</x-guestLayout>