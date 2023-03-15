<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <x-partials.head :title="$title ?? ' ' " />
</head>

<body>
    {{-- Navigation section --}}
    <x-partials.nav />

    {{-- Body section --}}
    <main class="min-h-screen antialiased">
        {{$slot}}
    </main>

    {{-- Footer section --}}


    {{-- Scripts section --}}

    @stack('scripts')
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>