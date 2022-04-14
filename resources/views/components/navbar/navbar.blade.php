<header class="flex w-full bg-white shadow font-header">
    <nav class="container bg-white pt-4 px-3.5 sm:flex sm:max-w-6xl sm:m-auto sm:items-center sm:justify-between">
         <!--logo tag -->
        <div class="sm:flex items-center">
        <span class="flex items-center text-2xl uppercase cursor-pointer">
            <a href="" class=" mr-2 rounded-full p-1">
            <img class="inlene h-20 w-20 bg-white  rounded-full p-2" src="/img/LogoROTA.png" alt="Logótipo da Na Rota dos Povos">
            </a>
            Na Rota dos Povos
        </span>
        </div>
        <!-- NAVAGATION LINKS-->
        <ul class="text-sm sm:flex sm:items-center">
            <x-navbar.button href="volunters" ligado="true">Voluntários</x-navbar.button>
            <x-navbar.button href="/partiner">Parceiros</x-navbar.button>
            <x-navbar.button href="/contac_us">Contactos</x-navbar.button>
            <x-navbar.button href="/projects">
                <button class="bg-[#4ca747] rounded-full p-4 uppercase text-sm text-white">Teke Action</button>
            </x-navbar.button>
        </ul>
    </nav>
</header>