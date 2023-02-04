<!-- header component -->
<header class="header">
    <div class="container-header">
        <div class="header-secundary">
            <ul class="menu-icons">
                <li class="icons">
                    <a href="#">
                        <img src="icons/search.png" alt="Barra de pesquisa">
                    </a>
                </li>
                <li class="icons">
                    <a href="https://www.facebook.com/NaRotaDosPovos/">
                        <img src="img/media/facebook_head.png" alt="Icon de Instagram">
                    </a>
                </li>
                <li class="icons">
                    <a href="https://www.instagram.com/accounts/login/?next=%2Fnarotadospovos%2F&source=omni_redirect">
                        <img src="img/media/instagram_head.png" alt="Icon de Instagram">
                    </a>
                </li>
                <li class="icons">
                    <a href="https://www.youtube.com/narotadospovos">
                        <img src="img/media/youtube_head.png" alt="Icon de Instagram">
                    </a>
                </li>
                <li class="icons">
                    <a href="contacto" class="contact">
                        <img src="icons/phoneCall.png" class="phone" alt="Telefone">
                        <span>Contacto</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="header-main">
            <div class="logo">
                <a href="/">
                    <img src="img/logo_rota.png" class="logo-rota" alt="Logótipo da Na Rota dos Povos">
                    <span>Na Rota dos <br>
                        <p>Povos</p>
                    </span>
                </a>
            </div>
            <div class="open-nav-menu"><span></span></div>
            <div class="menu-overley"></div>
            <!-- menu navigation start  -->
            <nav class="nav-menu">
                <div class="close-nav-menu">
                    <img src="icons/close-nav-menu.png" alt="Cross, delete, remove Icon">
                </div>
                <ul class="menu">
                    <li class="menu-item menu-dropdown">
                        <a href="#" data-toggle="sub-menu">
                            Quem Somos
                            <svg xmlns="http://www.w3.org/2000/svg" class="arrow-chevron-icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="quem_somos" class="">Sobre nós</a></li>
                            <!-- <li class="menu-item"><a href="a_nossa_historia" class="">A nossa história</a></li> -->
                            <li class="menu-item"><a href="orgaos_sociais" class="">Órgãos sociais</a></li>
                            <li class="menu-item"><a href="equipa_guine_bissau" class="">Equipa Guiné-Bissau</a></li>
                            <!-- <li class="menu-item"><a href="a_nossa_comunidade" class="">A nossa comunidade</a></li> -->
                            <li class="menu-item menu-dropdown-children">
                                <a href="#" data-toggle="sub-menu"> Documentos <i class="plus"></i></a>
                                <ul class="sub-menu-children ">
                                    <li class="sub-menu-item-children"><a href="relatorios">Relatórios</a></li>
                                    <li class="sub-menu-item-children"><a href="estatutos">Estatutos</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item menu-dropdown">
                        <a href="projetos" data-toggle="sub-menu">
                            Projetos
                            <svg xmlns="http://www.w3.org/2000/svg" class="arrow-chevron-icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="educacao" class="">A Educação é o Único Caminho</a></li>
                            <li class="menu-item"><a href="casa_da_mame" class="">Casa da Mamé</a></li>
                            <li class="menu-item"><a href="center_especial_educacional" class="">Tabanca dos Pequenitos</a></li>
                            <li class="menu-item"><a href="apoio_saude" class="">Apoio à Saúde</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-dropdown">
                        <a href="como_ajudar" data-toggle="sub-menu">
                            Como Ajudar
                            <!-- <svg xmlns="http://www.w3.org/2000/svg" class="arrow-chevron-icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg> -->
                        </a>
                        <!-- <ul class="sub-menu">
                            <li class="menu-item"><a href="faca_donativo" class="">Donativos</a></li>
                            <li class="menu-item"><a href="ser_firquidja" class="">Ser Firquidja</a></li>
                            <li class="menu-item"><a href="voluntariado" class="">Ser Voluntário</a></li>
                            <li class="menu-item"><a href="#" class="">Divulgar</a></li>
                        </ul> -->
                    </li>
                </ul>
            </nav>
            <!-- menu navigation end  -->
        </div>
    </div>
</header>

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
            //    console.log(bodyScrolling);
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