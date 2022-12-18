<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    <head>
        <x-partials.head :title="$title ?? ' ' "/>
    </head>

    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    @livewire('navigation-menu')
                        {{ $header }}
                    </div>
                </header>
            @endif

            {{-- Main Section Content--}}
            <main class="block w-full min-h-full bg-red-400">
                {{$slot}}
            </main>
        </div>

        <div class="flex" id="wrapper" x-data="{ open: false }"
        x-transition:enter.duration.500ms
    x-transition:leave.duration.400ms>
            {{-- Sidebar Section --}}
            <div class="h-screen p-4 overflow-y-auto bg-gray-500" id="sidebar" 
                :class="open ? 'w-48 px-4' : 'w-24'">
                
                {{-- Tag Logo--}}
                <div class="flex w-full h-auto p-4 justify-end">

                </div>
                <ul>
                    <li>Intruduction</li>
                    <li>Intruduction</li>
                    <li>Intruduction</li>
                    <li>Intruduction</li>
                </ul>
            </div>

            {{-- Body Section --}}
            <div class="w-full h-screen p-4 overflow-y-auto bg-red-400">
                <div class="flex w-full h-auto justify-start">
                    <button x-on:click="open = !open">
                        x
                    </button>
                </div>
                <div class="">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos dolorem perspiciatis molestias excepturi nobis. Laboriosam, sequi, sunt, voluptate obcaecati 
                        laborum asperiores ipsam corrupti tenetur voluptatum labore rerum tempora quasi minima.
                    </p>
                </div>
            </div>
        </div>

        {{-- Scripts section --}}
        @livewireScripts
        @stack('scripts')
    </body>
</html>
