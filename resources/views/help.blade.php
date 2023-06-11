<x-guestLayout>
    {{--Page title--}}
    <x-slot name="title">
        {{ ('Como Ajudar') }}
    </x-slot>


    
    <x-section>        
        <x-paragraph title="Como ajudar?">
            <p>Se der um pouco vai falta menos.</p>
            <p>Neste processo de fazer do mundo um lugar melhor, todos contam.</p>
            <p>Junte-se nós! Escolha como quer contribuir.</p>
        </x-paragraph>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-3 rounded my-6">
            <div class="bg-nrp-blue px-2 rounded text-center">
                <p class="text-white mt-2 text-3xl  bg-nrp-green rounded px-2 py-1">Ser Firquidja</p>
                <p class="mx-2 my-3 text-white">Apoie as nossas crianças tornando-se num firquidja da Casa da Mamé!</p>
            </div>
            <div class="bg-nrp-green px-2 rounded text-center">
                <p class="text-white mt-2 text-3xl  bg-nrp-blue rounded px-2 py-1">Donativo</p>
                <p class="mx-2 my-3 text-white">Faça um donativo e seja a mudança que quer ver no mundo!</p>
            </div>
            <div class="bg-nrp-blue px-2 rounded text-center">
                <p class="text-white mt-2 text-3xl  bg-nrp-green rounded px-2 py-1">Voluntariado</p>
                <p class="mx-2 my-3 text-white">Tem algumas horas livres que gostava de dedicar à "Na Rota dos Povos"?</p>
            </div>
        </div>


        <div class="space-y-4">
            <img src="images/selected/give1.jpg" class="m-auto">
            <img src="images/selected/give2.jpg" class="m-auto">
            <img src="images/selected/give3.jpg" class="m-auto">
            <img src="images/selected/give4.jpg" class="m-auto">
        </div>

        <x-paragraph title="Pontos de Recolha">
            <p>Armazém: Rua Gonçalves Zarco, 2644 – Santa Cruz do Bispo (próximo do Ikea Matosinhos) – tel: 932 412 050</p>
            <p>Curtes: Rua da Portelinha, nº 483, 4510-638 Fânzeres – Gondomar</p>
        </x-paragraph>

    </x-section>


    {{--

    <div class="flex flex-col min-h-screen justify-center items-center">
        <x-cards.structureWhitOutBg>
            <div class="flex flex-col gap-12 mt-12">
                <section class="flex flex-col gap-6">
                    <x-sections.text_section_block title="Como posso ajudar?" paragraph="Esta é uma pergunta que
                     ouvimos com muita frequência, e que bom que haja tanta gente a querer chegar até nós! Pode 
                     fazer parte da nossa missão sendo “Firquidja”, voluntário, doar ou ajudar a divulgar as 
                     nossas ações." />
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 justify-items-center">
                        <x-help.how-to-help :howToHelp="$help" />
                    </div>
                </section>
                <section class="grid grid-flow-row gap-12 justify-items-center">
                    <x-sections.text_section_block title="De que outra forma posso contribuir?" paragraph="Também pode contribuir 
                    através de consignação de IRS, com mobiliário e material escolar para as escolas de Catió, 
                    bicicletas, leite infantil e outros bens essenciais, participando nos nossos eventos 
                    solidários" />
                    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 justify-items-center">
                        <x-help.help :help="$help" />
                    </div>
                </section>
            </div>
        </x-cards.structureWhitOutBg>
    </div>
    --}}
</x-guestLayout>