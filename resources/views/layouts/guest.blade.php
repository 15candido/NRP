<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <x-partials.head :title="$title ?? ' ' " />
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

</head>

<body>
    {{-- Navigation section --}}
    <x-partials.nav />

    {{-- Body section --}}
    <main class="min-h-screen antialiased">
        {{$slot}}
    </main>

    {{-- Footer section --}}
    <x-partials.footer />

    {{-- Scripts section --}}

    @livewireScripts
    @stack('scripts')
    <!-- <script src="{{ mix('js/app.js') }}"></script> -->

</body>

</html>