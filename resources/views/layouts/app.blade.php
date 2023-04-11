<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <x-partials.head :title="$title ?? ' ' " />
</head>

{{-- Body Section --}}

<body class="font-sans antialiased">
    {{-- Main Content --}}
    <div class="flex min-h-screen bg-gray-300" id="wrapper" x-data="{ open: false }">

        {{-- Sidebar Section --}}
        <div class="flex flex-col h-screen overflow-y-auto bg-white shadow transition-all 
            duration-500" id="sidebar" :class="open ? 'w-96 md:w-64' : 'w-20'">
            {{-- Side Bar Component --}}
            <x-side-bar-menu-app />
        </div>

        {{-- Body Content --}}
        <div class="w-full h-screen overflow-y-auto transition-all duration-500">
            {{-- App Header Component --}}
            <x-app-header />

            {{-- Main Section  --}}
            <div class="px-6 py-3">
                <main class="block w-full min-h-full">
                    {{$slot}}
                </main>
            </div>
        </div>

    </div>

    {{-- Scripts section --}}
    @livewireScripts
    @stack('scripts')
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>