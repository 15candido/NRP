<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    <head>
        <x-partials.head :title="$title ?? ' ' "/>
    </head>
    <body class="font-body">
       
        {{-- Navigation section --}}
        <x-partials.nav />

        {{-- Body section --}}
        <main class="block w-full min-h-full">
            {{$slot}}
        </main>

        {{-- Footer section --}}
        <x-partials.footer />

        {{-- Scripts section --}}
        <livewire:scripts />
        @stack('scripts')
    </body>
</html>