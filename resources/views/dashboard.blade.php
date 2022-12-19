<x-app-layout>

    {{--Page title--}}
    <x-slot name="title">
            {{ ('Dashboard') }}
    </x-slot>
    {{-- Main Section --}}
    <div class="py-12">
        <div class="max-w-full mx-auto">
            <div class="flex flex-col gap-12 overflow-hidden">
                <a href="/children"><div class="bg-blue-400 p-4 border rounded">Crianças</div></a>

                <livewire:volunteers.index />
            </div>
        </div>
    </div>   
</x-app-layout>

