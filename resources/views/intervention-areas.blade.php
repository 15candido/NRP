
<x-guestLayout>
    <div class="grid grid-flow-row min-h-screen my-20 justify-items-center">
        <div class="grid grid-flow-row w-full max-w-7xl justify-items-center gap-20 px-5 lg:px-10 text-gray-600">
            <div class="intervention-areas grid grid-flow-row gap-6 justify-center items-center">
                <span class="description flex flex-col w-full h-auto space-y-4 text-base leading-normal ">
                    <h1 class="title text-2xl md:text-3xl font-extrabold text-left text-[#264653]">Áreas de Intervenção</h1>
                    <p class="description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid corrupti quia possimus, esse sint quo
                        dolorum reiciendis quisquam amet accusamus facilis, cupiditate ratione, itaque rerum vero mollitia
                        necessitatibus adipisci obcaecati.
                    </p>
                </span>
                <div class="intervention-areas w-full grid grid-cols-1 md:grid-cols-6 gap-4 justify-center items-center">
                    <x-cards.topic_content>
                        <div class="flex w-20 h-20 self-center justify-center items-center bg-gray-100 rounded-full">
                            <img src="img/areas/human_right.png" alt="" class="self-center w-20">
                        </div><br>
                        <h1 class="title text-lg font-extrabold mb-2 text-[#264653]">Direitos Humanos</h1>
                    </x-cards.topic_content>
                    <x-cards.topic_content>
                        <div class="flex w-20 h-20 self-center justify-center items-center bg-gray-100 rounded-full">
                            <img src="img/areas/education.png" alt="" class="self-center w-20">
                        </div><br>
                        <h1 class="title text-lg font-extrabold mb-2 text-[#264653]">Educação</h1>
                    </x-cards.topic_content>
                    <x-cards.topic_content>
                        <div class="flex w-20 h-20 self-center justify-center items-center bg-gray-100 rounded-full">
                            <img src="img/areas/health.png" alt="" class="self-center w-20">
                        </div><br>
                        <h1 class="title text-lg font-extrabold mb-2 text-[#264653]">Saúde e Bem-Estar</h1>
                    </x-cards.topic_content>
                    <x-cards.topic_content>
                        <div class="flex w-20 h-20 self-center justify-center items-center bg-gray-100 rounded-full">
                            <img src="img/areas/childhood_youth.png" alt="" class="self-center w-20">
                        </div><br>
                        <h1 class="title text-lg font-extrabold mb-2 text-[#264653]">Infância e Juventude</h1>
                    </x-cards.topic_content>
                    <x-cards.topic_content>
                        <div class="flex w-20 h-20 self-center justify-center items-center bg-gray-100 rounded-full">
                            <img src="img/areas/reduction_inequalities.png" alt="" class="self-center w-20">
                        </div>
                        <h1 class="title text-lg font-extrabold mb-2 text-[#264653]">Redução das Desigualdades</h1>
                    </x-cards.topic_content>
                    <x-cards.topic_content>
                        <div class="flex w-20 h-20 self-center justify-center items-center bg-gray-100 rounded-full">
                            <img src="img/areas/eradicate_poverty.png" alt="" class="self-center w-20 p">
                        </div>
                        <h1 class="title text-lg font-extrabold mb-2 text-[#264653]">Eradicação de Pobreza</h1>
                    </x-cards.topic_content>
                </div>
            </div>
            <div class="projects grid grid-flow-row gap-4 justify-center items-center">
                <span class="description flex flex-col w-full h-auto space-y-4 text-base leading-normal ">
                    <h1 class="title text-2xl md:text-3xl font-extrabold text-left text-[#264653]">Projectos</h1>
                    <p class="description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid corrupti quia possimus, esse sint quo
                        dolorum reiciendis quisquam amet accusamus facilis, cupiditate ratione, itaque rerum vero mollitia
                        necessitatibus adipisci obcaecati.
                    </p>
                </span>
                <div class="projects grid grid-cols-1 md:grid-cols-4 gap-4 justify-center items-center">
                    <x-cards.ongoing>
                        <div class="relative h-0 pb-2/3 2xl:h-full 2xl:pb-0"> <!-- image container -->
                            <img src="img/ProjectImg/tabpequinitos.jpg" alt="Tabanca dos Pequenitos" 
                            class="absolute inset-0 w-full h-full object-cover">
                        </div>
                        <div class="relative 2xl:col-span-2 px-2"> <!-- text container -->
                            <div class="space-y-4 md:space-y-0">
                                <div class="text-lg font-extrabold leading-6">
                                    <h2 class="truncate hover:text-clip">Tabanca dos <span class="greentextFromLogo">Pequenitos</span></h2>
                                </div>
                                <div class="text-base pb-2">
                                    <p class="text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit Necessitatibus rem
                                    neque.</p>
                                    <x-button.button>Saber +</strong></x-button.button>
                                </div>
                            </div>
                        </div>
                    </x-cards.ongoing> 
                    <x-cards.ongoing>
                        <div class="relative h-0 pb-2/3 2xl:h-full 2xl:pb-0"> <!-- image container -->
                            <img src="img/ProjectImg/tabpequinitos.jpg" alt="Tabanca dos Pequenitos" 
                            class="absolute inset-0 w-full h-full object-cover">
                        </div>
                        <div class="relative 2xl:col-span-2 px-2"> <!-- text container -->
                            <div class="space-y-4 md:space-y-0">
                                <div class="text-lg font-extrabold leading-6">
                                    <h2 class="truncate hover:text-clip">Tabanca dos <span class="greentextFromLogo">Pequenitos</span></h2>
                                </div>
                                <div class="text-base pb-2">
                                    <p class="text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit Necessitatibus rem
                                    neque.</p>
                                    <x-button.button>Saber +</strong></x-button.button>
                                </div>
                            </div>
                        </div>
                    </x-cards.ongoing> 
                    <x-cards.ongoing>
                        <div class="relative h-0 pb-2/3 2xl:h-full 2xl:pb-0"> <!-- image container -->
                            <img src="img/ProjectImg/tabpequinitos.jpg" alt="Tabanca dos Pequenitos" 
                            class="absolute inset-0 w-full h-full object-cover">
                        </div>
                        <div class="relative 2xl:col-span-2 px-2"> <!-- text container -->
                            <div class="space-y-4 md:space-y-0">
                                <div class="text-lg font-extrabold leading-6">
                                    <h2 class="truncate hover:text-clip">Tabanca dos <span class="greentextFromLogo">Pequenitos</span></h2>
                                </div>
                                <div class="text-base pb-2">
                                    <p class="text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit Necessitatibus rem
                                    neque.</p>
                                    <x-button.button>Saber +</strong></x-button.button>
                                </div>
                            </div>
                        </div>
                    </x-cards.ongoing> 
                    <x-cards.ongoing>
                        <div class="relative h-0 pb-2/3 2xl:h-full 2xl:pb-0"> <!-- image container -->
                            <img src="img/ProjectImg/tabpequinitos.jpg" alt="Tabanca dos Pequenitos" 
                            class="absolute inset-0 w-full h-full object-cover">
                        </div>
                        <div class="relative 2xl:col-span-2 px-2"> <!-- text container -->
                            <div class="space-y-4 md:space-y-0">
                                <div class="text-lg font-extrabold leading-6">
                                    <h2 class="truncate hover:text-clip">Tabanca dos <span class="greentextFromLogo">Pequenitos</span></h2>
                                </div>
                                <div class="text-base pb-2">
                                    <p class="text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit Necessitatibus rem
                                    neque.</p>
                                    <x-button.button>Saber +</strong></x-button.button>
                                </div>
                            </div>
                        </div>
                    </x-cards.ongoing> 
                    <x-cards.ongoing>
                        <div class="relative h-0 pb-2/3 2xl:h-full 2xl:pb-0"> <!-- image container -->
                            <img src="img/ProjectImg/tabpequinitos.jpg" alt="Tabanca dos Pequenitos" 
                            class="absolute inset-0 w-full h-full object-cover">
                        </div>
                        <div class="relative 2xl:col-span-2 px-2"> <!-- text container -->
                            <div class="space-y-4 md:space-y-0">
                                <div class="text-lg font-extrabold leading-6">
                                    <h2 class="truncate hover:text-clip">Tabanca dos <span class="greentextFromLogo">Pequenitos</span></h2>
                                </div>
                                <div class="text-base pb-2">
                                    <p class="text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit Necessitatibus rem
                                    neque.</p>
                                    <x-button.button>Saber +</strong></x-button.button>
                                </div>
                            </div>
                        </div>
                    </x-cards.ongoing> 
                    <x-cards.ongoing>
                        <div class="relative h-0 pb-2/3 2xl:h-full 2xl:pb-0"> <!-- image container -->
                            <img src="img/ProjectImg/tabpequinitos.jpg" alt="Tabanca dos Pequenitos" 
                            class="absolute inset-0 w-full h-full object-cover">
                        </div>
                        <div class="relative 2xl:col-span-2 px-2"> <!-- text container -->
                            <div class="space-y-4 md:space-y-0">
                                <div class="text-lg font-extrabold leading-6">
                                    <h2 class="truncate hover:text-clip">Tabanca dos <span class="greentextFromLogo">Pequenitos</span></h2>
                                </div>
                                <div class="text-base pb-2">
                                    <p class="text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit Necessitatibus rem
                                    neque.</p>
                                    <x-button.button>Saber +</strong></x-button.button>
                                </div>
                            </div>
                        </div>
                    </x-cards.ongoing> 
                    <x-cards.ongoing>
                        <div class="relative h-0 pb-2/3 2xl:h-full 2xl:pb-0"> <!-- image container -->
                            <img src="img/ProjectImg/tabpequinitos.jpg" alt="Tabanca dos Pequenitos" 
                            class="absolute inset-0 w-full h-full object-cover">
                        </div>
                        <div class="relative 2xl:col-span-2 px-2"> <!-- text container -->
                            <div class="space-y-4 md:space-y-0">
                                <div class="text-lg font-extrabold leading-6">
                                    <h2 class="truncate hover:text-clip">Tabanca dos <span class="greentextFromLogo">Pequenitos</span></h2>
                                </div>
                                <div class="text-base pb-2">
                                    <p class="text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit Necessitatibus rem
                                    neque.</p>
                                    <x-button.button>Saber +</strong></x-button.button>
                                </div>
                            </div>
                        </div>
                    </x-cards.ongoing> 
                    <x-cards.ongoing>
                        <div class="relative h-0 pb-2/3 2xl:h-full 2xl:pb-0"> <!-- image container -->
                            <img src="img/ProjectImg/tabpequinitos.jpg" alt="Tabanca dos Pequenitos" 
                            class="absolute inset-0 w-full h-full object-cover">
                        </div>
                        <div class="relative 2xl:col-span-2 px-2"> <!-- text container -->
                            <div class="space-y-4 md:space-y-0">
                                <div class="text-lg font-extrabold leading-6">
                                    <h2 class="truncate hover:text-clip">Tabanca dos <span class="greentextFromLogo">Pequenitos</span></h2>
                                </div>
                                <div class="text-base pb-2">
                                    <p class="text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit Necessitatibus rem
                                    neque.</p>
                                    <x-button.button>Saber +</strong></x-button.button>
                                </div>
                            </div>
                        </div>
                    </x-cards.ongoing> 
                </div>
            </div>
        </div>
    </div>
</x-guestLayout>