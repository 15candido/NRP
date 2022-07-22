<nav class="navbar py-6 shadow-2xl">
    <div class="navbar-container container flex flex-row lg:flex-col max-w-7xl  px-5 lg:px-10 justify-center items-center mx-auto gap-4">
        <!-- menu secundary -->
        <div class="flex flex-wrap w-full lg:flex-row justify-end items-center space-y-1 lg:gap-1 
            lg:space-y-0 lg:border-b-2 lg:border-gray-50 order-last lg:order-first">
            <a href="#" class="searchbar w-11 h-11 p-2 lg:w-8 lg:h-8 rounded-full fill-current hover:bg-gray-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-[#395692]" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
            </a> 
            <a href="#" class="youtube hidden lg:flex w-8 h-8 p-2 rounded-full fill-current hover:bg-gray-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-[#C71F1E]" viewBox="0 0 24 24">
                    <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path>
                </svg>
            </a>
            <a href="#" class="instagram hidden lg:flex w-7 h-7 p-2 rounded-full fill-current hover:bg-gray-200">
               <img src="img/media/instagram.png" alt="">
            </a>
            <a href="#" class="facebook hidden lg:flex w-7 h-7 p-2 rounded-full fill-current hover:bg-gray-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-[#395692]"  viewBox="0 0 24 24" >
                    <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path>
                </svg>
            </a>
        </div>
        <!-- primary menu -->
        <div class="w-full flex flex-row gap-4 lg:justify-between items-center order-first lg:order-last">
            <!--Menu toggle responsive button -->
            <button data-collapse-toggle="mobile-menu" type="button" class="inline-flex items-center text-sm text-gray-500 border-2
               border-gray-400 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200
               dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu" aria-expanded="false">
               <span class="sr-only">Abrir o menu Principal</span>
               <svg class="w-8 h-8 sm:w-12 sm:h-12" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1
                        1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd">
                    </path>
                </svg>
                <svg class="hidden w-10 h-10" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293
                        4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" 
                        clip-rule="evenodd">
                    </path>
                </svg>
            </button>
            <!-- Our Logo -->
            <a href="home" class="flex flex-shrink-0 lg:items-center">
                <img src="img/LogoRota.png" class="w-10 h-10 sm:w-16 sm:h-16 lg:w-24 lg:h-24 mr-4 p-1 bject-cover object-center
                rounded-full bg-white border-2 border-green-400 " alt="Logótipo da Na Rota dos Povos">
                <span class="hidden self-center font-black uppercase md:block md:text-xl lg:hidden ">Na Rota dos <br><p class="tracking-normal">Povos</p></span>
            </a>
            <div class="w-full hidden lg:flex lg:w-auto">
               <div class="list-none flex flex-col text-sm font-black lg:flex-row justify-center lg:items-center mt-4 space-y-2
               lg:gap-2 lg:space-y-0 lg:mt-0 text-[#264653] lg:text-base lg:font-bold uppercase">
                    <div class="relative flex justify-center items-center">
                        <a href="about" class="menu-btn flex flex-wrap gap-2 p-2 rounded-t-2xl hover:bg-bluelogo hover:text-white 
                        duration-200">
                            Quem Somos
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5 h-5" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                            </svg>
                        </a>
                        <div class="absolute hidden z-10 top-full min-w-full w-max bg-bluelogo shadow-md rounded-b-xl">
                            <ul class="dropdown list-none py-2 text-base font-medium text-white text-left normal-case border-t">
                                <li class="px-4 py-2 hover:bg-blue-400 border-b"><a href="#" class="py-1">Sobre Nós</a></li>
                                <li class="px-4 py-2 hover:bg-blue-400 border-b"><a href="#" class="py-1">Órgão Social</a>
                                <li class="px-4 py-2 hover:bg-blue-400 border-b"><a href="#" class="py-1">documentos</a>
                                    <ul class="block list-none bg-green-300">
                                        <li class="text-sm px-4 py-2 hover:bg-blue-400 border-b"><a href="#" class="py-1">Relatório</a>
                                        <li class="text-sm px-4 py-2 hover:bg-blue-400 border-b"><a href="#" class="py-1">Estatutos</a>
                                    </ul>
                                </li>
                                <li class="px-4 py-2 hover:bg-blue-400 border-b"><a href="#" class="py-1">Contacto</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="relative flex justify-center items-center">
                        <a href="intervention-areas" class="flex flex-wrap gap-2 p-2 rounded-t-2xl hover:bg-bluelogo hover:text-white duration-200">
                            Áreas de Intervenção
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5 h-5" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                            </svg>
                        </a>
                        <div class="absolute hidden z-10 top-full min-w-full w-max bg-bluelogo shadow-md rounded-b-xl">
                            <ul class="list-none py-2 text-base font-medium text-white text-left normal-case border-t">
                                <h2 class="text-lg font-extrabold px-4 py-2 mb-3 border-b-2 border-white/60">Projetos</h2>
                                <li class="px-4 py-2 hover:bg-blue-400 border-b"><a href="#" class="py-1"> A Educação é o Único Caminho</a></li>
                                <li class="px-4 py-2 hover:bg-blue-400 border-b"><a href="#" class="py-1">Casa da Mamé</a></li>
                                <li class="px-4 py-2 hover:bg-blue-400 border-b"><a href="#" class="py-1">Tabanca dos Pequenitos</a></li>
                                <li class="px-4 py-2 hover:bg-blue-400 border-none"><a href="#" class="py-1">Apoio à Saúde</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="relative flex justify-center items-center">
                        <a href="help" class="flex flex-wrap gap-2 p-2 rounded-t-2xl hover:bg-bluelogo hover:text-white duration-200">
                            Como Ajudar
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5 h-5" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                            </svg>
                        </a>
                        <div class="absolute hidden z-10 top-full min-w-full w-max bg-bluelogo shadow-md rounded-b-xl">
                            <ul class="list-none py-2 text-base font-medium text-white text-left normal-case border-t">
                                <li class="px-4 py-2 hover:bg-blue-400 border-b"><a href="#" class="py-1">Ser Firquidja</a></li>
                                <li class="px-4 py-2 hover:bg-blue-400 border-b"><a href="#" class="py-1">Donativos</a></li>
                                <li class="px-4 py-2 hover:bg-blue-400 border-b"><a href="#" class="py-1">Volutário (a)</a></li>
                                <li class="px-4 py-2 hover:bg-blue-400 border-none"><a href="#" class="py-1">Partilhar</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="flex justify-center items-center">
                        <x-button.call-to-action>Fazer Parte</x-button.call-to-action>   
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        console.log('test');
        // When I hover in to the menu, got to the dropdown menu
        // When I unhover remove the dorpdown menu
    </script>
</nav>

                        