
<x-guestLayout>
    <div class="grid grid-flow-row min-h-screen justify-items-center">
        <div class="grid grid-flow-row w-full max-w-7xl justify-items-center gap-20 px-5 py-10 lg:px-10 text-gray-600">
            <div class="how-to-help-us grid grid-flow-row gap-6 justify-center items-center">
                <span class="description flex flex-col w-full h-auto pt-8 space-y-4 text-base leading-normal ">
                    <h1 class="title text-2xl md:text-3xl font-extrabold text-left text-[#264653]">Como Posso Ajudar?</h1>
                    <p class="description">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum aliquam perspiciatis tempore voluptate,
                        inventore atque eos saepe perferendis et, sit suscipit animi quas libero obcaecati necessitatibus ducimus,
                        non labore ipsa.
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
                                    <h2 class="truncate hover:text-clip">Ser <span class="greentextFromLogo">Firquidja</span></h2>
                                </div>
                                <div class="text-base pb-2">
                                    <p class="text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit Necessitatibus rem
                                    neque.</p>
                                    <x-button.read-more>Saber +</strong></x-button.read-more>
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
                                    <h2 class="truncate hover:text-clip">Por Meio <span class="greentextFromLogo">de Donativos</span></h2>
                                </div>
                                <div class="text-base pb-2">
                                    <p class="text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit Necessitatibus rem
                                    neque.</p>
                                    <x-button.read-more>Saber +</strong></x-button.read-more>
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
                                    <h2 class="truncate hover:text-clip">Ser <span class="greentextFromLogo">Voluntário (a)</span></h2>
                                </div>
                                <div class="text-base pb-2">
                                    <p class="text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit Necessitatibus rem
                                    neque.</p>
                                    <x-button.read-more>Saber +</strong></x-button.read-more>
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
                                    <h2 class="truncate hover:text-clip">Através de <span class="greentextFromLogo">Partilha</span></h2>
                                </div>
                                <div class="text-base pb-2">
                                    <p class="text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit Necessitatibus rem
                                    neque.</p>
                                    <x-button.read-more>Saber +</strong></x-button.read-more>
                                </div>
                            </div>
                        </div>
                    </x-cards.ongoing> 
                </div>
            </div>
            <div class="another-way-to-helpUs grid grid-flow-row gap-6 justify-center items-center">
                <span class="description flex flex-col w-full h-auto space-y-4 text-base leading-normal ">
                    <h1 class="title text-2xl md:text-3xl font-extrabold text-left text-[#264653]">De Outra Forma Posso Ajudar?</h1>
                    <p class="description">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum aliquam perspiciatis tempore voluptate,
                        inventore atque eos saepe perferendis et, sit suscipit animi quas libero obcaecati necessitatibus ducimus,
                        non labore ipsa.
                    </p>
                </span>
                <div class="intervention-areas w-full grid grid-cols-1 md:grid-cols-6 gap-4 justify-center items-center">
                    <x-cards.topic_content>
                        <div class="flex w-20 h-20 self-center justify-center items-center bg-gray-100 rounded-full">
                            <img src="img/help/irs.png" alt="" class="self-center w-20">
                        </div><br>
                        <h1 class="title text-lg font-extrabold mb-2 text-[#264653]">Consignação de IRS</h1>
                    </x-cards.topic_content>
                    <x-cards.topic_content>
                        <div class="flex w-20 h-20 self-center justify-center items-center bg-gray-100 rounded-full">
                            <img src="img/help/school_equipment.png" alt="" class="self-center w-20">
                        </div>
                        <h1 class="title text-lg font-extrabold mb-2 text-[#264653]">Equipamentos escolares</h1>
                    </x-cards.topic_content>
                    <x-cards.topic_content>
                        <div class="flex w-20 h-20 self-center justify-center items-center bg-gray-100 rounded-full">
                            <img src="img/help/school.png" alt="" class="self-center w-20">
                        </div><br>
                        <h1 class="title text-lg font-extrabold mb-2 text-[#264653]">Material escolar</h1>
                    </x-cards.topic_content>
                    <x-cards.topic_content>
                        <div class="flex w-20 h-20 self-center justify-center items-center bg-gray-100 rounded-full">
                            <img src="img/help/bicycle.png" alt="" class="self-center w-20">
                        </div><br>
                        <h1 class="title text-lg font-extrabold mb-2 text-[#264653]">Bicicletas</h1>
                    </x-cards.topic_content>
                    <x-cards.topic_content>
                        <div class="flex w-20 h-20 self-center justify-center items-center bg-gray-100 rounded-full">
                            <img src="img/help/essential_goods.png" alt="" class="self-center w-20">
                        </div><br>
                        <h1 class="title text-lg font-extrabold mb-2 text-[#264653]">Bens essênciais</h1>
                    </x-cards.topic_content>
                    <x-cards.topic_content>
                        <div class="flex w-20 h-20 self-center justify-center items-center bg-gray-100 rounded-full">
                            <img src="img/help/events.png" alt="" class="self-center w-20">
                        </div>
                        <h1 class="title text-lg font-extrabold mb-2 text-[#264653]">Participar nos eventos</h1>
                    </x-cards.topic_content>
                    <x-cards.topic_content>
                        <div class="flex w-20 h-20 self-center justify-center items-center bg-gray-100 rounded-full">
                            <img src="img/help/giving_away.png" alt="" class="self-center w-20 p">
                        </div>
                        <h1 class="title text-lg font-extrabold mb-2 text-[#264653]">Tornar útil com coisas simples</h1>
                    </x-cards.topic_content>
                </div>
            </div>
        </div>
    </div>
</x-guestLayout>