<nav class="navbar py-6 shadow-2xl">
    <div class="navbar-container container flex flex-row lg:flex-col max-w-7xl  px-5 lg:px-10 justify-center items-center mx-auto gap-4">
        <!-- menu secundary -->
        <div class="flex flex-wrap w-full lg:flex-row justify-end items-center space-y-1 lg:gap-1 lg:space-y-0 lg:border-b-2 lg:border-gray-50
            order-last lg:order-first">
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
            <a href="contact" class="contact hidden lg:flex flex-wrap justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 p-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                </svg>
                <span class="text-xs font-bold text-gray-600 uppercase">Contacto</span>
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
            <a href="/" class="flex flex-shrink-0 lg:items-center">
                <img src="img/logo_rota.png" class="max-h-24 mr-4 p-1 bject-cover object-center rounded-full bg-white" alt="Logótipo da Na Rota dos Povos">
                <span class="self-center font-black uppercase sm:hidden md:text-xl">Na Rota dos <br><p class="tracking-normal">Povos</p></span>
            </a>
            <div class="w-full hidden lg:flex lg:w-auto">
               <div class="flex flex-col text-sm font-black lg:flex-row justify-center lg:items-center mt-4 space-y-2 lg:gap-2 lg:space-y-0 lg:mt-0
                    text-[#264653] lg:text-base lg:font-bold uppercase">
                    <div class="relative flex justify-center items-center">
                        <a href="about" class="menu-btn flex flex-wrap gap-2 p-2 rounded-t-2xl hover:bg-bluelogo hover:text-white 
                        duration-200">
                           <h1 class="title"> Quem Somos</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5 h-5" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                            </svg>
                        </a>
                        <ul class="dropdown absolute z-10 block top-full min-w-full w-max bg-bluelogo shadow-md rounded-b-xl  
                            list-none py-2 text-base font-medium text-white text-left normal-case border-t" id="dropdownColor">
                            <li class="px-4 py-2 hover:bg-blue-400 border-b"><a href="#" class="py-1">Sobre Nós</a></li>
                            <li class="px-4 py-2 hover:bg-blue-400 border-b"><a href="#" class="py-1">A Nossa História</a></li>
                            <li class="px-4 py-2 hover:bg-blue-400 border-b"><a href="#" class="py-1">Órgão Social</a>
                            <li class="px-4 py-2 hover:bg-blue-400 border-b"><a href="#" class="py-1">Equipa de Gestão</a></li>
                            <li class="px-4 py-2 hover:bg-blue-400 border-b"><a href="#" class="py-1">Voluntários</a></li>
                            <li class="px-4 py-2 hover:bg-blue-400"><a href="#" class="py-1">documentos</a>
                                <ul class="hidden list-none bg-green-300">
                                    <li class="text-sm px-4 py-2 hover:bg-blue-400 border-b"><a href="#" class="py-1">Relatório</a>
                                    <li class="text-sm px-4 py-2 hover:bg-blue-400 border-b"><a href="#" class="py-1">Estatutos</a>
                                </ul>
                            </li>
                         </ul>
                        
                    </div>
                    <div class="relative flex justify-center items-center">
                        <a href="intervention-areas" class="flex flex-wrap gap-2 p-2 rounded-t-2xl hover:bg-bluelogo hover:text-white duration-200">
                            Áreas de Intervenção
                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5 h-5" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                            </svg>
                        </a>
                        <div class="absolute z-10 top-full min-w-full w-max bg-bluelogo shadow-md rounded-b-xl">
                            <ul class="list-none py-2 text-base font-medium text-white text-left normal-case border-t">
                                <!-- <h2 class="text-lg font-extrabold px-4 py-2 mb-3 border-b-2 border-white/60">Projetos</h2> -->
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
                        <div class="absolute z-10 top-full min-w-full w-max bg-bluelogo shadow-md rounded-b-xl">
                            <ul class="list-none py-2 text-base font-medium text-white text-left normal-case border-t">
                                <li class="px-4 py-2 hover:bg-blue-400 border-b"><a href="#" class="py-1">Ser Firquidja</a></li>
                                <li class="px-4 py-2 hover:bg-blue-400 border-b"><a href="#" class="py-1">Donativos</a></li>
                                <li class="px-4 py-2 hover:bg-blue-400 border-b"><a href="#" class="py-1">Volutário (a)</a></li>
                                <li class="px-4 py-2 hover:bg-blue-400 border-none"><a href="#" class="py-1">Partilhar</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<nav class="navbar w-full h-auto pt-6 shadow-2xl">
    <!-- secundary menu -->
    <div class="w-full h-auto flex px-5 lg:px-10 justify-center items-center border-b-2 border-y-gray-50">
        <div class="primaryMenu hidden lg:flex lg:flex-row w-full h-auto max-w-7xl mx-auto justify-end items-center ">
            <a href="#" class="searchbar w-11 h-11 p-2 lg:w-8 lg:h-8 rounded-full fill-current hover:bg-gray-100">
                <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-[#395692]" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 
                    1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
            </a> 
            <a href="#" class="youtube lg:flex w-8 h-8 p-2 rounded-full fill-current hover:bg-gray-100">
                <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-[#C71F1E]" viewBox="0 0 24 24">
                    <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484
                    8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615
                    12.816v-8l8 3.993-8 4.007z"></path>
                </svg>
            </a>
            <a href="#" class="instagram flex w-7 h-7 p-2 rounded-full fill-current hover:bg-gray-100">
               <img src="img/media/instagram.png" alt="">
            </a>
            <a href="#" class="facebook flex w-7 h-7 p-2 rounded-full fill-current hover:bg-gray-100">
                <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-[#395692]"  viewBox="0 0 24 24" >
                    <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 
                    1.583-5.192 4.615v3.385z"></path>
                </svg>
            </a>
            <a href="contact" class="contact flex flex-wrap justify-center items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" 
                class="w-7 h-7 p-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 
                   002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 
                   1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963
                   3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                </svg>
                <span class="text-xs font-bold text-gray-600 uppercase">Contacto</span>
            </a>
        </div>
    </div>
    <!-- primary menu -->
    <div class="flex flex-row w-full h-auto max-w-7xl mx-auto mt-4 justify-between text-sm font-black text-[#264653] lg:text-base 
        lg:font-black uppercase">
        <!--Menu toggle responsive button -->
        <button data-collapse-toggle="mobile-menu" type="button" class="inline-flex items-center text-sm text-gray-500 border-2
            border-gray-400 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200
            dark:text-gray-500 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu" aria-expanded="false">
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
        <!-- Logo -->
        <a href="/" class="w-auto h-auto flex flex-shrink-0 items-center">
            <img src="img/logo_rota.png" class="max-h-24 mr-4 p-1 bject-cover object-center rounded-full bg-white" alt="Logótipo da Na Rota dos Povos">
            <span class="hidden self-center font-black md:text-xl">Na Rota dos <br><p class="tracking-normal">Povos</p></span>
        </a>
        <ul class="relative w-full h-auto flex flex-row gap-4 justify-end items-center list-none">
            <li class="relative flex flex-col space-y-2">
                <a href="#" class="flex gap-1 p-2 justify-center items-center hover:text-gray-800 hover:rounded-2xl duration-200">
                    Quem Somos
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5 h-5" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0
                         0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                    </svg>
                </a>
                <div class="dropdown block absolute z-10 min-w-full w-max left-0 top-12 bg-white rounded-lg">
                    <ul class="inline-block w-full h-auto text-base font-semibold text-gray-500 space-y-2 p-2 list-none normal-case">
                        <li class=""><a href="#" class="">Sobre Nós</a></li>
                        <li class=""><a href="#" class="">A Nossa História</a></li>
                        <li class=""><a href="#" class="">Órgão Social</a></li>
                        <li class=""><a href="#" class="">Equipa de Gestão</a></li>
                        <li class=""><a href="#" class="">Voluntários</a></li>
                        <li class="">
                            <a href="3" class=" flex gap-1 items-center">
                                Documentos
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5 h-5" viewBox="0 0 16 16">
                                  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0
                                   0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                                </svg>
                            </a>
                            <div class="dropdown_2 block min-w-full w-max rounded-lg bg-gray-50">
                                <ul class="block w-full h-auto place-self-auto p-4">
                                    <li class="">Relatório</li>
                                    <li class="">Estatutos</li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="relative flex flex-col space-y-2">
                <a href="#" class="flex gap-1 p-2 justify-center items-center hover:text-gray-800 hover:rounded-2xl duration-200">
                    Áreas de Intervenção
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5 h-5" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0
                        0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                    </svg>
                </a>
                <div class="dropdown block absolute z-10 min-w-full w-max left-0 top-12 bg-white rounded-lg">
                    <ul class="inline-block w-full h-auto text-base font-semibold text-gray-500 space-y-2 p-2 list-none normal-case">
                        <li class=""><a href="#" class="">A Educação é o Único Caminho</a></li>
                        <li class=""><a href="#" class="">Casa da Mamé</a></li>
                        <li class=""><a href="#" class="">Tabanca dos Pequenitos</a></li>
                        <li class=""><a href="#" class="">Apoio à Saúde</a></li>
                    </ul>
                </div>
            </li>
            <li class="relative flex flex-col space-y-2">
                <a href="#" class="flex gap-1 p-2 justify-center items-center hover:text-gray-800 hover:rounded-2xl duration-200">
                    Como Ajudar
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5 h-5" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0
                        0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                    </svg>
                </a>
                <div class="dropdown block absolute z-10 min-w-full w-max left-0 top-12 bg-white rounded-lg">
                    <ul class="inline-block w-full h-auto text-base font-semibold text-gray-500 space-y-2 p-2 list-none normal-case">
                        <li class=""><a href="#" class="">Ser Firquidja</a></li>
                        <li class=""><a href="#" class="">Donativos</a></li>
                        <li class=""><a href="#" class="">Volutário (a)</a></li>
                        <li class=""><a href="#" class="">Partilhar</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>
