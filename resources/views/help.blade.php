<x-guestLayout>
    {{--Page title--}}
    <x-slot name="title">
        {{ ('Como Ajudar') }}
    </x-slot>
    <div class="flex flex-col min-h-screen justify-center items-center">
        <x-cards.structureWhitOutBg>
            <div class="flex flex-col gap-12 mt-12">
                <div class="flex flex-col gap-6">
                    <x-cards.info-default-card title="Como posso ajudar?" description="Esta é uma pergunta que ouvimos com muita 
                        frequência, e que bom que haja tanta gente a querer chegar até nós! Pode fazer parte da nossa missão sendo 
                        “Firquidja”, voluntário, doar ou ajudar a divulgar as nossas ações." />
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 justify-items-center">
                        <x-help.how-to-help :howToHelp="$help" />
                    </div>
                </div>
                <div class="grid grid-flow-row gap-12 justify-items-center">
                    <x-cards.info-default-card title="De que outra forma posso contribuir?" description="Também pode contribuir através 
                        de consignação de IRS, com mobiliário e material escolar para as escolas de Catió, bicicletas, leite infantil e 
                        outros bens essenciais, participando nos nossos eventos solidários" />
                    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 justify-items-center">
                        <x-help.help :help="$help" />
                    </div>
                </div>
            </div>
        </x-cards.structureWhitOutBg>
    </div>
</x-guestLayout>