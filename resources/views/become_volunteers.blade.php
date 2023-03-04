    <x-guestLayout>
        {{--Page title--}}
        <x-slot name="title">
            {{ ('Voluntariado') }}
        </x-slot>
        <div class="flex flex-col min-h-screen items-center">
            <x-page-header src="images/project/carouselVolunteers.jpg" title="Ser voluntário da Na Rota dos Povos" fromPage="Como Ajudar" toPage="Seja voluntário" alt="Voluntários da Na Rota dos Povos" /> <!--about us hero image -->
            <x-cards.structureWhitOutBg>
                <div class="grid grid-cols-1 lg:grid-cols-2 justify-start items-start space-y-6 md:gap-16 md:space-y-0">
                    <div class="flex flex-col gap-2">
                        {{--Title--}}
                        <em class="title text-[#5ba057]">Seja Voluntário da ONGD "Na Rota dos Povos"</em>

                        {{-- Body --}}
                        <div class="space-y-4">
                            <h4>O Voluntariado assenta numa relação</h4>
                            <p>
                                de solidariedade, mas é mais do que ter “boa vontade” e
                                “querer ajudar o outro”. É uma forma de cidadania ativa, mas que exige responsabilidade, compromisso e
                                respeito pela missão, cultura, e valores da entidade acolhedora.
                            </p>
                            <p>
                                Ao tornar-se voluntário da Na Rota dos Povos, está a trabalhar para o desenvolvimento num
                                contexto social e cultural diferente, o que lhe obriga a sair da sua zona de conforto e a enfrentar com
                                pragmatismo os desafios do dia-a-dia em que a carência permanente é uma realidade. Desta forma, contribui
                                para aquilo que é o nosso objetivo: a melhoria das condições de vida das populações junto das quais
                                atuamos, nas áreas da educação, saúde, proteção, integração, combate a descriminação...
                            </p>
                        </div>
                        <a href="#" class="text-sm underline">
                            Ler o documento "Ser Voluntário" da ONGD "Na Rota dos Povos"
                        </a>
                    </div>

                    <div class="flex flex-col space-y-4 lg:rounded-lg lg:shadow lg:pb-4 lg:px-4">
                        {{-- Conditions --}}
                        <x-conditions />
                        {{-- Register form --}}
                        <livewire:volunteers.default-register-modal />
                    </div>
                </div>
            </x-cards.structureWhitOutBg>
        </div>
        </x-geustLayout>