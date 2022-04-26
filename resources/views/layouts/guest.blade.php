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
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </head>
    <!-- body content -->
    <body class="font-body over">
        <div class="text-gray-800 antialiased">
            <x-navbar.navbar/>
            {{ $slot }}
            <x-footer/>
        </div>
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