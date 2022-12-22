<div class="space-y-6">
    <div class="flex w-full h-auto justify-between px-6 py-4 shadow border">
        {{--Logo Section and Toggle Button--}}
        <div class="w-full gap-7 " :class="open ? 'flex' : 'hidden' ">
            <div class="shrink-0 flex items-center">
                <a href="{{ route('dashboard') }}">
                    <img src="img/logo_rota.png" class="block max-h-9 w-auto" alt="Logótipo da 
                    Na Rota dos Povos">
                </a>
            </div>
            {{-- APP Name --}}
            <div class="hidden md:block">
                <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                    {{ __('NRDP') }}
                </x-jet-nav-link>
            </div>
        </div>

        {{--Toggle Button--}}
        <button x-on:click="open = !open" class="block">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" 
            class="w-9 h-9 px-1.5 text-gray-700">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 
                12h16.5m-16.5 5.25H12" />
            </svg>
        </button>
    </div>

    {{-- Menu Sidebar--}}
    <ul class="flex flex-col side-bar-menu ml-3 ">
        <li class="px-4 py-2 {{ Request::is('dashboard') ? 'active' : ''  }}" id="Dashbaord">
            <a href="{{ route('dashboard') }}"  class="inline-flex gap-7 text-sm text-gray-500 uppercase">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" 
                class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0
                    .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 
                    1.125-1.125V9.75M8.25 21h8.25" />
                </svg>
                Dashboard
            </a>
        </li>
        <li class="px-4 py-2 {{ Request::is('necessidades') ? 'active' : ''  }}" id="Project">
            <a href="necessidades"  class="inline-flex gap-7 text-sm text-gray-500 uppercase">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20"
                class="w-5 h-5" >
                    <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 
                    1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 
                    3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 
                    1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 
                    1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 
                    0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                </svg>
                Necessidade
            </a>
        </li>
        <li class="px-4 py-2 {{ Request::is('campanhas') ? 'active' : ''  }}" id="Campain">
            <a href="/campanhas"  class="inline-flex gap-7 text-sm text-gray-500 uppercase">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20" class="w-5 h-5">
                    <path d="M8 7.982C9.664 6.309 13.825 9.236 8 13 2.175 9.236 6.336 6.31 8 7.982Z"/>
                    <path d="M3.75 0a1 1 0 0 0-.8.4L.1 4.2a.5.5 0 0 0-.1.3V15a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V4.5a.5.5 0 0 0-.1-.3L13.05.4a1 1 
                    0 0 0-.8-.4h-8.5Zm0 1H7.5v3h-6l2.25-3ZM8.5 4V1h3.75l2.25 3h-6ZM15 5v10H1V5h14Z"/>
                </svg>
                Campanhas
            </a>
        </li>
        <li class="px-4 py-2 {{ Request::is('projetos') ? 'active' : ''  }}" id="Project">
            <a href="/projetos"  class="inline-flex gap-7 text-sm text-gray-500 uppercase">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" 
                class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75a4.5 4.5 0 01-4.884 4.484c-1.076-.091-2.264.071-2.95.904l-7.152 
                    8.684a2.548 2.548 0 11-3.586-3.586l8.684-7.152c.833-.686.995-1.874.904-2.95a4.5 4.5 0 016.336-4.486l-3.276 3.276a3.004 3.004 0 002.25 
                    2.25l3.276-3.276c.256.565.398 1.192.398 1.852z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.867 19.125h.008v.008h-.008v-.008z" />
                </svg>
                Projetos
            </a>
        </li>
        <li class="px-4 py-2 {{ Request::is('formas-de-apoiar') ? 'active' : ''  }}" id="HowToHelp">
            <a href="/formas-de-apoiar" class="inline-flex gap-7 text-sm text-gray-500 uppercase" >
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" 
                class="w-5 h-5 text-gray-700">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 
                    2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                </svg>
                Apoiar
            </a>
        </li>
        <li class="px-4 py-2 {{ Request::is('comunidade') ? 'active' : ''  }}">
            <a href="/comunidade" class="inline-flex gap-7 text-sm text-gray-500 uppercase">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" 
                class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 
                    .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 
                    0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 
                    3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                </svg>
                Comunidade
            </a>
        </li>
        <li class="px-4 py-2 {{ Request::is('historia') ? 'active' : ''  }}">
            <a href="/historia" class="inline-flex gap-7 text-sm text-gray-500 uppercase">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" 
                class="w-5 h-5 ">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 21v-7.5a.75.75 0 01.75-.75h3a.75.75 0 01.75.75V21m-4.5 
                    0H2.36m11.14 0H18m0 0h3.64m-1.39 0V9.349m-16.5 11.65V9.35m0 0a3.001 3.001 0 003.75-.615A2.993 2.993 0 009.75 
                    9.75c.896 0 1.7-.393 2.25-1.016a2.993 2.993 0 002.25 1.016c.896 0 1.7-.393 2.25-1.016a3.001 3.001 0 003.75.614m-16.5 
                    0a3.004 3.004 0 01-.621-4.72L4.318 3.44A1.5 1.5 0 015.378 3h13.243a1.5 1.5 0 011.06.44l1.19 1.189a3 3 0 01-.621 
                    4.72m-13.5 8.65h3.75a.75.75 0 00.75-.75V13.5a.75.75 0 00-.75-.75H6.75a.75.75 0 00-.75.75v3.75c0 .415.336.75.75.75z" />
                </svg>
                História
            </a>
        </li>
        <li class="px-4 py-2 {{ Request::is('documentos') ? 'active' : ''  }}">
            <a href="/documentos" class="inline-flex gap-7 text-sm text-gray-500 uppercase">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" 
                class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 
                    0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 
                    1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                </svg>

                Documentos
            </a>
        </li>
        <li class="px-4 py-2 {{ Request::is('newsletters') ? 'active' : ''  }}">
            <a href="/newsletters" class="inline-flex gap-7 text-sm text-gray-500 uppercase">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" 
                    class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 
                    1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 
                    3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                </svg>

                Newslleters
            </a>
        </li>
        <li class="px-4 py-2 {{ Request::is('contactos') ? 'active' : ''  }}" id="Contacts">
            <a href="/contactos" class="inline-flex gap-7 text-sm text-gray-500 uppercase">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" 
                class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 
                    2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 
                    0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 
                    1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 
                    3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
                </svg>
                Contactos
            </a>
        </li>
    </ul>
</div>