<x-app-layout>

    {{--Page title--}}
    <x-slot name="title">
        {{ ('Dashboard') }}
    </x-slot>
    
    {{-- Main Section --}}
    <div class="py-12">
    
    @can('manager')
        <a href="/warehouse">
            <div class="w-48 p-6 bg-red-400 text-white">Manager</div>
        </a>
    @endcan

    </div>   
</x-app-layout>

