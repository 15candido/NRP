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

        Apoie as nossas crianças tornando-se num firquidja da Casa da Mamé!
        SER FIRQUIDJA
        Faça um donativo e seja a mudança que quer ver no mundo!
        DOAR
        Tem algumas horas livres que gostava de dedicar à "Na Rota dos Povos"?
        VOLUNTARIADO

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