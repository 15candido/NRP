<div class="relative w-full p-4 overflow-hidden bg-gray-200 shadow-sm sm:rounded-lg ">
    {{-- Header Section--}}
    <div>
        {{-- Intro Section --}}
        <div class="flex flex-col p-4 space-y-4 md:flex-row md:space-x-4 md:space-y-0 md:justify-between">
            <div class="flex flex-col w-full md:w-3/4 space-y-2">
                <h3>Voluntários</h3>
                <p class="hidden">
                    Lista dos voluntários da "Na Rota dos Povos", inluindo suas fotos de perfil, name, email, contacto
                    telefónico, status...
                </p>
            </div>
            <div class="flex w-full md:justify-end items-center md:w-1/4">
                <livewire:volunteers.register />
            </div>
        </div>
        
        {{-- Filter Section --}}
        <div class="flex w-full p-4 space-x-2">
            
            {{-- Search Box --}}
            <div class="relative w-full md:w-1/2">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    {{-- Search Icon --}}
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z">
                        </path>
                    </svg>
                </div>
                {{-- Search Field --}}
                <input wire:model.debounce.300ms="search" type="text" class="block w-full p-3 pl-10 text-sm text-gray-600
                placeholder-gray-400 border border-gray-200 bg-gray-50 rounded-lg shadow-inner focus:ring-indigo-200
                focus:border-indigo-200" placeholder="Pesquisar por voluntário..." required>
            </div>

            <div class="hidden w-1/2 md:flex space-x-2">
                
                {{-- Order by --}}
                <div class="relative w-full">
                    <select wire:model="orderBy" id="orderBy" class="relative block w-full p-3 pl-10 text-sm text-gray-600
                    placeholder-gray-400 border border-gray-200 bg-gray-50 rounded-lg shadow-inner focus:ring-indigo-200
                    focus:border-indigo-200">
                        <option value="name">Nome</option>
                        <option value="phone">Telemóvel</option>
                        <option value="created_at">Registo</option>
                    </select>
                    <div class="absolute inset-y-0 ring-0 flex items-center px-2 text-gray-600 pointer-events-none">
                    </div>
                </div>

                {{-- Order Asc --}}
                <div class="relative w-full">
                    <select wire:model="orderAsc" id="orderAsc" class="relative block w-full p-3 pl-10 text-sm text-gray-600
                    placeholder-gray-400 border border-gray-200 bg-gray-50 rounded-lg shadow-inner focus:ring-indigo-200
                    focus:border-indigo-200">
                        <option value="1">Ascendente</option>
                        <option value="0">Descendente</option>
                    </select>
                    <div class="absolute inset-y-0 ring-0 flex items-center px-2 text-gray-600 pointer-events-none">
                    </div>
                </div>

                {{-- Per Page --}}
                <div class="relative w-full">
                    <select wire:model="perPage" id="perPage" class="relative block w-full p-3 pl-10 text-sm text-gray-600
                    placeholder-gray-400 border border-gray-200 bg-gray-50 rounded-lg shadow-inner focus:ring-indigo-200
                    focus:border-indigo-200">
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="15">15</option>
                        <option value="20">20</option>
                    </select>
                    <div class="absolute inset-y-0 ring-0 flex items-center px-2 text-gray-600 pointer-events-none">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="p-4 space-y-4">
        {{-- Table Section--}}
        <div class="relative overflow-x-auto overflow-y-hidden bg-white shadow rounded-lg">
            <table class="table-auto w-full text-sm text-left text-gray-500">
                <thead class="text-xs uppercase bg-gray-100">
                    <tr class="whitespace-nowrap">
                        <th scope="col" class="py-5 px-6">
                           Foto
                        </th>
                        <th scope="col" class="py-5 px-6">
                            Nome
                        </th>
                        <div class="hidden md:inline-table">
                            <th scope="col" class="py-5 px-6">
                                Telemóvel
                            </th>
                            <th scope="col" class="py-5 px-6">
                            Eamil
                            </th>
                            <th scope="col" class="py-5 px-6">
                            Data de Registo
                            </th>
                            <th scope="col" class="py-5 px-6">
                            Status
                            </th>
                            <th scope="col" class="py-5 px-6">
                            Ação
                            </th>
                        </div>
                    </tr>
                </thead>
                <tbody>
                    @foreach($volunteers as $volunteer)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="py-4 px-6">
                                <span class="inline-flex w-8 h-8 justify-center items-center rounded-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="object-center w-full h-full fill-gray-400" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                        <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 
                                        1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z"/>
                                    </svg>
                                </span>
                            </td>
                            <td class="py-4 px-6">
                               {{$volunteer->name}}
                            </td>
                            <div class="hidden md:inline-block">
                                <td class="py-4 px-6">
                                    {{$volunteer->phone}}
                                </td>
                                <td class="py-4 px-6">
                                    {{$volunteer->email}}
                                </td>
                                <td class="py-4 px-6">
                                    {{ $volunteer->createdAt() }}
                                </td>
                                <td class="py-4 px-6">
                                    @if($volunteer->status == true)
                                        <span class="inline-flex text-[#5ba057] text-center px-4 py-1.5 bg-[#5ba057] rounded-lg bg-opacity-25">
                                            {{ __('Ativo') }}
                                        </span>
                                    @else
                                        <span class="inline-flex text-red-400 text-center px-4 py-1.5 bg-red-400 rounded-lg bg-opacity-25 ">
                                            {{ __('Inativo') }}
                                        </span>
                                    @endif
                                </td>
                                {{-- Actions Buttons--}}
                                <td class="flex space-x-1 items-center">

                                    {{-- Profil Button --}}
                                    <livewire:volunteers.profile :volunteer="$volunteer" :wire:key="'profil-volunteer-'. now() .$volunteer->id" >

                                    {{-- Edit Button --}}
                                    <livewire:volunteers.edit :volunteer="$volunteer" :wire:key="'edit-volunteer'. now() . $volunteer->id" >

                                    {{-- Delete Button --}}
                                    <livewire:volunteers.delete :volunteer="$volunteer" :wire:key="'delete-volunteer-'. $volunteer->id" >
                                </td>
                            </div>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{-- Pagination Section --}}
        <div class="">
            {{$volunteers->links()}}
        </div>
    </div>
</div>


