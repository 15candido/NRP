<x-guestLayout>
    {{--Page title--}}
    <x-slot name="title">
        {{ ('Doar') }}
    </x-slot>
    <div class="flex flex-col min-h-screen items-center">
        <x-page-header 
            src="img/ProjectImg/carouselDonate.jpg"
            title="Faça a sua doação" fromPage="Como Ajudar" toPage="Donativos"
            alt="Voluntários da Na Rota dos Povos"
        /> <!--about us hero image -->
        <x-cards.structureWhitOutBg>
            <div class="flex flex-col lg:flex-row justify-start items-start py-20 gap-10">
                <div class="w-full flex flex-col gap-4">
                    <x-cards.infocard
                        description="Quando faz um donativo a ONGD “Na Rota dos Povos”, contribui para a sobrevivência das crianças órfãs 
                        cuja mãe morreu durante o parto, coopera para identificação de problemas e melhoria das condições de vida das 
                        populações junto das quais atuamos, nas áreas da educação, da saúde, da proteção infantil e do ambiente. "
                    />
                    <x-cards.infocard
                        description="Para conseguirmos encarar os desafios do dia-a-dia em que a carência permanente é uma realidade, 
                        precisamos de tomar iniciativas e o seu gesto pode ser a diferença entre ter algo e não ter nada. "
                    />
                    <x-cards.infocard
                        description="Juntos, temos a certeza de que podemos construir um mundo melhor, mais justo e inclusivo."
                    />
                    <ul class="space-y-4 list-disc">
                        <p>Daor:</p>
                        <li class="ml-14">
                            Pode fazer o seu donativo através da transferência bancária para o IBAN: PT50 0036 0407 99106015040 19
                        </li>
                        <li class="ml-14">
                            Ou através da transferência por MBway para o número - 932 412 050.  Apoiar a ONGD “Na Rota dos Povos” é fácil 
                            e está à distância de um click no seu telemóvel. 
                        </li>
                    </ul>
                </div>
                <div class="relative w-full h-full">
                    <x-cards.imagecard 
                    src="img/ProjectImg/donate.jpg"
                    alt="Ser solidário"/>
                </div>
            </div>
        </x-cards.structureWhitOutBg>
    </div>
</x-geustLayout>