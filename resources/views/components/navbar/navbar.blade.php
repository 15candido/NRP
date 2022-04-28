<header class="flex w-full bg-white shadow font-header">
    <nav class="md:container flex items-center justify-between flex-wrap bg-white p-6
        md:max-w-6xl md:m-auto md:grid md:grid-rows-1 md:grid-flow-col md:gap-x-4">
        <!-- logo -->
        <div class="flex  flex-shrink-0 flex-wrap items-center  text-white uppercase cursor-pointer">
            <a href="" class="bg-green-400 mr-2 rounded-full p-1">
                <img class=" flex flex-shrink-0 h-20 w-20 bg-white  rounded-full p-2"
                src="/img/LogoROTA.png" alt="Logótipo da Na Rota dos Povos">
            </a>
            <span class="font-semibold text-xl break-words md:hidden">
                <strong class="text-cyan-500 font-semibold tracking-[3px]">Na Rota</strong>
                <p class="text-green-400">dos Povos</p>
            </span>
        </div>
        <!--Menu toggle responsive button -->
        <div class="block md:hidden text-3xl cursor-pointer"> 
            <button class="flex items-center px-3 py-2 border rounded text-[#4ca747]
            border-[#4ca747] hover:text-green-700 hover:border-green-700" name="menu" onclick="Menu(this)">
                <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
                </svg>
        </button>           
        </div>
        <!-- End logo wrapper -->
        <!-- navegation menu -->
        <div class="w-full block flex-grow flex-wrap md:row-span-1 md:col-span-1 md:flex md:items-center
        md:w-auto px-2 md:ml-6 bg-[#4ca747] md:bg-white">
            <!-- Secundary navegation-menu -->
            <div class="w-full hidden text-xs text-gray-500 flex-grow md:auto md:flex
            md:justify-end md:items-center pb-4">
                <div class="flex-grow md:flex md:items-center md:justify-between md:mr-32">
                    <div class="leadingcontact md:flex md:flex-grow md:items-center">
                        <!-- <ion-icon class="text-blue-400 mr-4 text-2xl" name="call-outline"></ion-icon> -->
                        <span class= "md:break-words">
                            <p class="text-[#4ca747] font-semibold">Rua Gonçalves Zarco, 2644</p>
                            <p class="">Sta Cruz do Bispo - Matosinhos</p>
                        </span>
                    </div>
                    <div class="HeaderContact">
                        <p class="text-[#4ca747] text-base flex flex-grow justify-center px-10">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-[#4ca747] w-6 h-8 mr-2"
                         viewBox="0 0 20 20" fill="currentColor" name="call-outline">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 
                            1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 
                            0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                        </svg>
                         932412050
                        </p>
                    </div>
                </div>
                <div class=" md:flex md:space-x-5 md:items-center md:justify-between">
                <x-navbar.button href="/Causes">Parceiros</x-navbar.button>
                <x-navbar.button href="/Causes">Voluntários</x-navbar.button>
                <x-navbar.search/> 
                </div>
            </div>
            <!-- Primary navegation-menu -->
            <ul class="w-full md:justify-end md:flex md:items-center 
            md:opacity-100 opacity-0 transition-all ease-in duration-100 uppercase">
                <x-navbar.button href="#abutUs" ligado="true">Quem somos</x-navbar.button>
                <x-navbar.button href="/Causes">O que fazemos</x-navbar.button>
                <x-navbar.button href="/HowTohelp">Como Ajudar</x-navbar.button>
                <x-navbar.button href="/Projects">Portifólios</x-navbar.button>
                <x-navbar.button href="/Report">Relatórios</x-navbar.button>
                <x-navbar.button href="/VolunteerDiary ">Diário de Voluntários</x-navbar.button>
                <x-navbar.button href="/VolunteerDiary ">Contacto</x-navbar.button>
                <button class=" bg-white text-sm text-[#4ca747] flex-shrink-0 border-none md:bg-[#4ca747] md:text-white
                uppercase duration-500 px-6 py-2 ml-4 mb-4 shadow-lg hover:shadow-2xl 
                rounded-2xl hover:bg-cyan-500 ">
                    <a href="">Envolve-te</a>
                </button>
            </ul>
            <!-- End primary navegation menu -->
        </div>
    </nav>
</header>