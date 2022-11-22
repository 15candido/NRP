<x-guestLayout>
    <div class="flex flex-col min-h-screen items-center">
        <x-page-header 
            src="img/ProjectImg/carouselFirquidjas.jpg"
            title="Ser Firquidja da Na Rota dos Povos" fromPage="Como ajudar" toPage="Ser firquidja"
            alt="Firquidjas da Na Rota dos Povos"
        /> <!--about us hero image -->
        <x-cards.structureWhitOutBg>
            <div class="flex flex-col lg:flex-row justify-start items-start py-20 gap-10">
                <div class="w-full flex flex-col gap-8">
                    <div class="flex flex-col w-full h-auto gap-4 text-base leading-normal">
                        <h4>Um Firquidja</h4>
                        <p>É, em crioulo guineense, um membro da família que garante que tudo corre bem.
                            Ser Firquidja da Na Rota dos Povos é assegurar que as crianças da Casa da Mamé tenham um lar, 
                            comida, a possibilidade de brincar, acesso à educação e abraço de amor. É aproximar-se de quem 
                            mais precisa através de um abraço solidário.
                        </p>
                    </div>
                    <div class="flex flex-col w-full h-auto gap-4 text-base leading-normal">
                        <h4>A Casa da Mamé</h4>
                        <p>É uma casa coração que acolhe crianças cuja mãe morreu durante o parto. O nascimento é uma das 
                            experiências mais duras da humanidade. É um momento de separação que só se ameniza quando a criança
                            volta para o abraço da mãe. A Guiné-Bissau, tem uma das taxas mais elevadas do mundo de mortalidade 
                            da mãe durante o parto, e por isso, muitas das crianças nunca terão este abraço suavizador.
                        </p>
                    </div>
                </div>
                <div class="relative w-full flex flex-col gap-8 rounded-xl shadow-lg p-4 hover:shadow-xl">
                    <div class="flex flex-col w-full h-auto gap-4 text-base leading-normal">
                        <h2>Junte-se a nós</h2>
                        <p class="font-semibold text-lg">
                            Contribua para a alimentação, a saúde e a educação destas nossas e suas crianças, tornando-se um 
                            Firquidja, doando a um valor periódico fixo, sem valor mínimo, por débito em conta.
                        </p>
                    </div>
                    <x-firquidjas.form/>
                </div>
            </div>
        </x-cards.structureWhitOutBg>
    </div>
</x-geustLayout>