<x-app-layout>

    {{--Page title--}}
    <x-slot name="title">
            {{ ('Comunidade') }}
    </x-slot>
    {{-- Main Section --}}
    <div class="py-12">
        <div class="max-w-full mx-auto">
            <div class="flex flex-col gap-12 overflow-hidden">
                <!-- <h2>Comunidade Na Rota dos Povos</h2> -->
                <div class="flex flex-col space-y-2 md:flex-row md:space-x-2 md:space-y-0">
                    <x-buttons.btn-secondary class="bg-gray-200 text-gray-400 py-4">
                        <a href="">Orgão Social</a>
                    </x-buttons.btn-secondary>
                    <x-buttons.btn-secondary class="bg-gray-200 text-gray-400 py-4">
                        <a href="">Equipa de Gestão</a>
                    </x-buttons.btn-secondary>
                    <x-buttons.btn-secondary class="bg-gray-200 text-gray-400 py-4">
                        <a href="">Firquidjas</a>
                    </x-buttons.btn-secondary>
                    <x-buttons.btn-secondary class="bg-gray-200 text-gray-400 py-4">
                        <a href="">Voluntários</a>
                    </x-buttons.btn-secondary>
                </div>
                <livewire:volunteers.index />
            </div>
        </div>
    </div>   
</x-app-layout>

