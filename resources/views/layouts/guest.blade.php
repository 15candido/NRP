<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <x-partials.head :title="$title ?? ' ' "/>
    </head>
    <body class="font-body">
       
        <x-partials.nav />

        <main class="block w-full min-h-full">
            {{$slot}}
        </main>

        <x-partials.footer />
       
        <!-- javascript start  -->
        <script src="js/index.js"></script>
        <livewire:scripts />
        
    </body>
</html>