<x-guestLayout>
    {{--Page title--}}
    <x-slot name="title">
        {{ ('Doar') }}
    </x-slot>
    <div class="flex flex-col min-h-screen items-center">
        <x-cards.page_hero pageName="Faça a sua doação" image="/images/project/carouseldonate.jpg" />
        <x-cards.structureWhitOutBg>
            <div class="flex flex-col lg:flex-row justify-start items-start gap-12">
                <div class="w-full flex flex-col gap-4">
                    <x-cards.card_overview description="Quando faz um donativo a ONGD “Na Rota dos Povos”, contribui para a sobrevivência das crianças órfãs 
                        cuja mãe morreu durante o parto, coopera para identificação de problemas e melhoria das condições de vida das 
                        populações junto das quais atuamos, nas áreas da educação, da saúde, da proteção infantil e do ambiente. " />
                    <x-cards.card_overview description="Para conseguirmos encarar os desafios do dia-a-dia em que a carência permanente é uma realidade, 
                        precisamos de tomar iniciativas e o seu gesto pode ser a diferença entre ter algo e não ter nada. " />
                    <x-cards.card_overview description="Juntos, temos a certeza de que podemos construir um mundo melhor, mais justo e inclusivo." />
                    <ul class="space-y-6 list-disc">
                        <strong>Daor:</strong>
                        <li class="ml-14">
                            Pode fazer o seu donativo através da transferência bancária para o IBAN: PT50 0036 0407 99106015040 19
                        </li>
                        <li class="ml-14">
                            Ou através da transferência por MBway para o número - 932 412 050. Apoiar a ONGD “Na Rota dos Povos” é fácil
                            e está à distância de um click no seu telemóvel.
                        </li>
                    </ul>
                </div>
                <div class="relative w-full h-full">
                    <x-cards.image_card image="/images/project/donate.jpg" />
                </div>
            </div>
        </x-cards.structureWhitOutBg>
    </div>
    </x-geustLayout>