<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400&family=Roboto:wght@100&display=swap" rel="stylesheet">
        <!-- Styles -->
         <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <!-- <script src="https://cdn.tailwindcss.com"></script> -->
        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        
        @livewireStyles
    </head>
    <!-- body content -->
    <body class="font-body">
        <!-- header  -->
        <x-navbar.navbar/>
        <!-- Main container to wrap all the components to be delivered to the guestLayout -->
        <div class="main-container">
            {{ $slot }}
        </div>
        <!-- Footer  -->
        <x-footer.footer/>
        <!-- livewirescripts code  -->
        @livewireScripts
        <script>
            function Menu(e){
                let list = document.querySelector('ul');
                e.name === 'menu' ? (e.name = "close",list.classList.add('opacity-100')) 
                : (e.name = "menu",list.classList.remove('opacity-100'))
            }
        </script>
    </body>
</html>