<header class="flex flex-wrap justify-center items-center mb-6">
    <div class="relative fixed-width mt-8 pb-5">
        {{-- Logo --}}
        <div class="absolute flex flex-row gap-4 items-center top-1/2 -translate-y-1/2">
            <a href="/">
                <img src="/images/logo.png" class="max-h-16 p-1 object-cover
                rounded-full lg:max-h-28 transition duration-300 ease-in-out" alt="Logotipo">
            </a>
            <a href="/" class="relative hidden xs:flex xs:flex-wrap">
                <h3 class="relative flex  mb-0 font-black text-lg md:text-3xl lg:text-4xl text-right">
                    Na Rota dos<br>Povos
                    <em class="absolute bottom-1 text-left text-[6.9px] lg:bottom-0
                                md:text-xs lg:text-sm leading-normal">
                        A Educação é o <br> Único Caminho
                    </em>
                </h3>
            </a>
        </div>
        {{-- Secondary menu --}}
        <div class="w-full hidden lg:flex lg:flex-wrap justify-end">
            <ul class="flex flex-row gap-4  border-b-2 border-solid border-gray-100">
                <li class="flex justify-center items-center p-0 m-0">
                    <a href="https://www.facebook.com/NaRotaDosPovos/" target="_blank" class="w-8 h-8 p-1.5 opacity-50 hover:opacity-100 rounded-full">
                        <img src="/images/media/facebook_head.png" alt="Icon de Instagram">
                    </a>
                </li>
                <li class="flex justify-center items-center p-0 m-0">
                    <a href="https://www.instagram.com/accounts/login/?next=%2Fnarotadospovos%2F&source=omni_redirect" target="_blank">
                        <img src="/images/media/instagram_head.png" alt="Icon de Instagram" class="w-8 h-8 p-1.5 opacity-50 hover:opacity-100 rounded-full">
                    </a>
                </li>
                <li class="flex justify-center items-center p-0 m-0">
                    <a href="https://www.youtube.com/narotadospovos" target="_blank" class="w-8 h-8 p-1.5 opacity-50 hover:opacity-100 rounded-full">
                        <img src="/images/media/youtube_head.png" alt="Icon de Instagram">
                    </a>
                </li>
                <li class="flex justify-center items-center p-0 m-0">
                    <a href="/contacto" class="flex flex-row gap-2 justify-between items-center opacity-50 hover:opacity-100">
                        <img src="/icons/phoneCall.png" class="w-8 h-8 p-1.5 opacity-50 hover:opacity-100 rounded-full" alt="Telefone">
                        <span class="text-xs font-bold text-gray-600 uppercase">Contacto</span>
                    </a>
                </li>

                {{-- Login/Registration --}}
                @if (Auth::user())
                <li class="flex justify-center items-center p-0 m-0">
                    <form method="POST" action="/logout" class="flex flex-row gap-2 justify-between">
                        @csrf
                        <div class="flex flex-row justify-between items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-8 h-8 
                            stroke-current stroke-[2px]">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <h5 class="text-xs font-bold text-gray-600 uppercase">Olá {{ Auth::user()->name }}</h5>
                        </div>
                        <button class="bg-red-400 uppercase text-white px-2">Logout</button>
                    </form>
                </li>
                @else
                {{--
                <a href="#" class="flex flex-row justify-between items-center opacity-50 hover:opacity-100 ">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-8 h-8 fill-none stroke-[2px] 
                    stroke-current p-1.5 opacity-50 hover:opacity-100 rounded-full">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 
                        017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                    </svg>
                    <span class="text-xs font-bold text-gray-600 uppercase">Login</span>
                </a>
                --}}
                @endif
            </ul>
        </div>
        {{-- Premary menu --}}
        <div class="primary-menu">
            {{-- Toggle menu --}}
            <div class="open-nav-menu"><span></span></div>
            <div class="menu-overley"></div>
            {{-- Navigation menu --}}
            <nav class="nav-menu p-0">
                <div class="close-nav-menu">
                    <img src="/icons/close-nav-menu.png" alt="Cross, delete, remove Icon">
                </div>
                <ul class="menu">
                    <li class="menu-item menu-dropdown">
                        <a href="" data-toggle="sub-menu">
                            Quem somos
                            <svg xmlns="http://www.w3.org/2000/svg" class="arrow-chevron-icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="/quem_somos">Sobre nós</a></li>
                            <li class="menu-item"><a href="/orgaos_sociais">Orgão Sociais</a></li>
                            <li class="menu-item"><a href="/equipa_guine_bissau">Equipa Guiné-Bissau</a></li>
                            <li class="menu-item"><a href="/estatutos">Estatutos</a></li>
                            <li class="menu-item"><a href="/relatorios">Relatórios</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-dropdown">
                        <a href="/projetos" data-toggle="sub-menu">
                            Projetos
                            <svg xmlns="http://www.w3.org/2000/svg" class="arrow-chevron-icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </a>
                        <ul class="sub-menu">
                            <li class="menu-item">
                                <a href="/projeto.a-educacao-e-o-unico-caminho">
                                    Apoio às escolas
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="/projeto.casa-da-mame">
                                    Casa da Mamé
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="/projeto.center-de-educacao-especial-e-terapeutica">
                                    Tabanca dos Pequenitos</a>
                            </li>
                            <li class="menu-item">
                                <a href="/projeto.apoio-saude">
                                    Apoio à Saúde
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="/como_ajudar" data-toggle="sub-menu">como Ajudar</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>

{{-- DOM manipulation --}}

@push('scripts')
<script>
    // Responsive nav menu
    (() => {
        //Selecting classes
        const openNavMenu = document.querySelector(".open-nav-menu"),
            closeNavMenu = document.querySelector(".close-nav-menu"),
            navMenu = document.querySelector(".nav-menu"),
            menuOverley = document.querySelector(".menu-overley"),
            mediaSize = 991;

        openNavMenu.addEventListener('click', toggleNav);
        closeNavMenu.addEventListener('click', toggleNav);
        //This close nav menu when user cick outside of nav menu
        menuOverley.addEventListener("click", toggleNav);

        function toggleNav() {
            navMenu.classList.toggle("open");
            menuOverley.classList.toggle("active");
            document.body.classList.toggle("hidden-scrolling");
            // console.log(bodyScrolling);
        }

        //Whem user click in dorpdown menu, search for the target
        navMenu.addEventListener("click", (event) => {
            if (event.target.hasAttribute("data-toggle") && window.innerWidth <= mediaSize) {
                // Prevent the default behavior of link referencing, the anchor link 
                event.preventDefault();
                const menuDropdown = event.target.parentElement;
                // If the drop-down menu is already expanded, then collapse it. 
                if (menuDropdown.classList.contains("active")) {
                    collapsesubMenu();
                } else {

                    // Before collapsing, check for collapse
                    if (navMenu.querySelector(".menu-dropdown.active")) {
                        collapsesubMenu();
                    }
                    // expand new dropdown menu^
                    menuDropdown.classList.add("active");
                    const subMenu = menuDropdown.querySelector(".sub-menu");
                    subMenu.style.maxHeight = subMenu.scrollHeight + "px";
                }
            }
        });

        function collapsesubMenu() {
            navMenu.querySelector(".menu-dropdown.active .sub-menu").removeAttribute("style");
            navMenu.querySelector(".menu-dropdown.active").classList.remove("active");
        }

        function fixSize() {
            // In case nav menu is already open, close it
            if (navMenu.classList.contains("open")) {
                toggleNav();
            }
            // In case menu dropdown is already expanded, collapse it
            if (navMenu.querySelector(".menu-dropdown.active")) {
                collapsesubMenu();
            }
        }

        window.addEventListener("resize", function() {
            if (this.innerWidth > mediaSize) {
                fixSize();
            }
        });
    })();
</script>
@endpush