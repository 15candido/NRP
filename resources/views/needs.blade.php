<x-app-layout>
    {{--Page title--}}
    <x-slot name="title">
            {{ ('Necessidades') }}
    </x-slot>
    {{-- Main Section --}}
    <div class="py-12">
        <div class="max-w-full mx-auto">
            <div class="flex flex-col space-y-6 justify-center items-center overflow-hidden">

            <div class="w-full sm:w-11/12 md:w-10/12 lg:w-9/12 xl:w-8/12">
                <h2>Necessidades</h2>
            </div>
               
                <livewire:needs.register-needs />
            </div>
        </div>
    </div>   
</x-app-layout>
