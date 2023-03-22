<x-guestLayout>
    {{--Page title--}}
    <x-slot name="title">
        {{ ('Firquidja') }}
    </x-slot>
    <div class="flex flex-col min-h-screen items-center">
        <x-page-header src="images/project/carouselFirquidjas.jpg" title="Ser Firquidja da Na Rota dos Povos" fromPage="Como ajudar" toPage="Ser firquidja" alt="Firquidjas da Na Rota dos Povos" /> <!--about us hero image -->
        <x-cards.structureWhitOutBg>
            <div class="flex flex-col lg:flex-row justify-start items-start gap-12">
                <div class="w-full flex flex-col gap-6">
                    <div class="flex flex-col">
                        <em class="title">Um Firquidja</em>
                        <p>É, em crioulo guineense, um membro da família que garante que tudo corre bem.
                            Ser Firquidja da Na Rota dos Povos é assegurar que as crianças da Casa da Mamé tenham um lar,
                            comida, a possibilidade de brincar, acesso à educação e abraço de amor. É aproximar-se de quem
                            mais precisa através de um abraço solidário.
                        </p>
                    </div>
                    <div class="flex flex-col">
                        <em class="title">A Casa da Mamé</em>
                        <p>É uma casa coração que acolhe crianças cuja mãe morreu durante o parto. O nascimento é uma das
                            experiências mais duras da humanidade. É um momento de separação que só se ameniza quando a criança
                            volta para o abraço da mãe. A Guiné-Bissau, tem uma das taxas mais elevadas do mundo de mortalidade
                            da mãe durante o parto, e por isso, muitas das crianças nunca terão este abraço suavizador.
                        </p>
                    </div>
                </div>
                <div class="w-full flex flex-col gap-6 lg:h-2/3 lg:rounded-xl lg:shadow-lg lg:px-4 lg:hover:shadow-xl">
                    <div class="flex flex-col w-full h-auto">
                        <h3>Junte-se a nós</h3>
                        <p>
                            Contribua para a alimentação, saúde e a educação destas nossas e suas crianças, tornando-se um
                            Firquidja, doando a um valor periódico fixo, sem valor mínimo, por débito em conta.
                        </p>
                    </div>
                    <livewire:firquidjas.default-subscription-modal />
                </div>
            </div>
        </x-cards.structureWhitOutBg>
    </div>
    </x-geustLayout>