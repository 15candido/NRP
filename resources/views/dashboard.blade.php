<x-app-layout>

    <div class="flex">
        <div class="w-10 h-96 bg-yellow-300">

        </div>
        <div class="flex flex-col">
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Dashboard') }}
                </h2>
            </x-slot>
            <div class="py-12 ">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <a href="/children"><div class="bg-blue-400 p-4 border rounded">Crianças</div></a>
                    </div>
                </div>
            </div>
            <livewire:volunteers.index />
        </div>
    </div>
    
</x-app-layout>

