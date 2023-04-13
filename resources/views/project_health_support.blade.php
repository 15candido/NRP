<x-guestLayout>
    {{--Page title--}}
    <x-slot name="title">
        {{ ('Projeto - Apoio à saúde') }}
    </x-slot>
    <div class="flex flex-col min-h-screen justify-start items-center">
        <x-cards.page_hero pageName="Apoio à saúde" image="/images/project/carouselhealth.jpg" />
        <x-cards.structureWhitOutBg>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <x-cards.page_card_overview title="Apoio à Saúde" description="O Hospital Musna Sambú, em Catió, sofre de 
                inúmeras e graves carências, que só não têm consequências mais gravosas graças à dedicação dos seus poucos 
                médicos, enfermeiros e demais pessoal. O Hospital ainda não tem acesso a água potável nem energia elétrica, 
                exceto no bloco operatório (que tem graves carências), onde tem um gerador de apoio, e no serviço de sangue 
                e laboratório, onde tem energia fornecida por painéis solares. Os doentes internados têm de comprar os seus 
                próprios medicamentos e providenciar a alimentação. Isto obriga a um enorme esforço das famílias dos doentes,
                que têm habitualmente de viver nas instalações do hospital para poderem assim apoiar o seu familiar doente. 
                A imagiologia não funciona, a estomatologia também não, e o laboratório é muito rudimentar." />
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