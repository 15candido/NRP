<x-guestLayout>
    {{--Page title--}}
    <x-slot name="title">
        {{ ('Projeto - Casa da Mamé') }}
    </x-slot>
    <div class="flex flex-col min-h-screen justify-start items-center">
        <x-cards.page_hero pageName="Casa de acolhimento - Orfanato" image="/images/project/carouselhouse.jpg" />
        <x-cards.structureWhitOutBg>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <x-cards.page_card_overview title="Casa da Mamé" description="Identificando uma necessidade urgente de apoio aos órfãos em Catió (crianças cuja mãe havia 
                morrido ao dar à luz), a Rota dos Povos decidiu, em 2017, criar uma casa de acolhimento - a Casa da Mamé, que 
                funciona na cidade de Catió. A Casa da Mamé é uma casa coração que acolhe crianças cuja mãe morreu durante o 
                parto. É uma casa que permite às crianças ter um lar, comida, a possibilidade de brincar, acesso à educação e 
                um abraço de amor. É gerida diariamente a partir de Portugal, e inteiramente financiada por donativos de 
                particulares e empresas (Firquidjas). A casa acolhe e tutela 15 crianças de ambos os sexos, a sua capacidade 
                máxima, em todas as dimensões de sua vida (proteção, assistência, educação, etc.). Empregamos e remuneramos 12 
                pessoas de Catió na Casa da Mamé, designadamente amas, cozinheira, lavadeira, responsável e jardineiro." />
                <x-cards.image_card image="/images/project/mame.jpg" />
            </div>
        </x-cards.structureWhitOutBg>
        <x-cards.structureWithBg>
            <h3>O que foi feito</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
                <x-cards.project_card_completed_tasks title="Espaço" note="Construímos um orfanato com capacidade para acolher 15 crianças de ambos os sexos." image="/images/outline/house.jpg" />
                <x-cards.project_card_completed_tasks title="Stock" note="Fornecemos, regularmente, alimentos a Casa da Mamé: arroz, massa, azeite, óleo, papas lácteas, leite nido, ..." image="/images/outline/stock.jpg" />
                <x-cards.project_card_completed_tasks title="Colaboradores" note="Empregamos e remuneramos 15 funcionários em Catió na Casa da Mamé, designadamente amas, ..." image="/images/outline/team.jpg" />
                <x-cards.project_card_completed_tasks title="Parque infantil" note="Criamos um parque infantil, um espaço ao ar livre onde as nossas crianças pudessem brincar.'" image="/images/outline/park.jpg" />
                <x-cards.project_card_completed_tasks title="Sala de estudo" note="Temos uma sala de estudo onde as nossas crianças pudessem realizar as atividades lúdicas, pedagógicas..." image="/images/outline/studyhall.jpg" />
            </div>
        </x-cards.structureWithBg>
    </div>
</x-guestLayout>