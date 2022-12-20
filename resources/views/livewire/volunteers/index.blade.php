<div class="w-full overflow-hidden bg-white border border-gray-200 shadow sm:rounded-lg">
    {{-- Livewire Volunteer Component --}}
    <livewire:volunteers.register />

    <div class="flex w-full p-3 space-x-2">
        {{-- Search Box --}}
        <div class="w-3/6">
            <input wire:model.debounce.300ms="search" type="text" class="relative w-full px-3 py-3 pl-10 text-sm
            border border-gray-200 text-gray-600 placeholder-gray-400 bg-gray-100 border-nome rounded-md shadow-inner outline-none
            focus:outline-none focus:shadow-outline focus:ring-0 focus:bg-indigo-50" placeholder="Pesquisar por voluntário.....">
        </div>

        {{-- Order by --}}
        <div class="relative w-1/6">
            <select wire:model="orderBy" id="orderBy" class="relative w-full px-3 py-3 pl-10 text-sm
            border border-gray-200 text-gray-600 placeholder-gray-400 bg-gray-100 border-nome rounded-md shadow-inner outline-none
            focus:outline-none focus:shadow-outline focus:ring-0 focus:bg-indigo-50">
                <option value="id">ID</option>
                <option value="name">Nome</option>
                <option value="created_at">Data</option>
            </select>
            <div class="absolute inset-y-0 ring-0 flex items-center px-2 text-gray-600 pointer-events-none">
            </div>
        </div>

        {{-- Order Asc --}}
        <div class="relative w-1/6">
            <select wire:model="orderAsc" id="orderAsc" class="relative w-full px-3 py-3 pl-10 text-sm
            border border-gray-200 text-gray-600 placeholder-gray-400 bg-gray-100 border-nome rounded-md shadow-inner outline-none
            focus:outline-none focus:shadow-outline focus:ring-0 focus:bg-indigo-50">
                <option value="1">Ascendente</option>
                <option value="0">Descendente</option>
            </select>
            <div class="absolute inset-y-0 ring-0 flex items-center px-2 text-gray-600 pointer-events-none">
            </div>
        </div>

        {{-- Per Page --}}
        <div class="relative w-1/6">
            <select wire:model="perPage" id="perPage" class="relative w-full px-3 py-3 pl-10 text-sm
            border border-gray-200 text-gray-600 placeholder-gray-400 bg-gray-100 border-nome rounded-md shadow-inner outline-none
            focus:outline-none focus:shadow-outline focus:ring-0 focus:bg-indigo-50">
                <option value="5"> 5 </option>
                <option value="10">10</option>
                <option value="15">15</option>
                <option value="20">20</option>
            </select>
            <div class="absolute inset-y-0 ring-0 flex items-center px-2 text-gray-600 pointer-events-none">
            </div>
        </div>
    </div>

    <div class="overflow-hidden shadow">
        <table class="w-full divide-y divide-gray-200 table-fixed">
            <thead class="font-bold tracking-wide text-gray-600 bg-indigo-100">
                <tr class="text-xs tracking-wider text-left uppercase">
                    <th class="w-1/3 p-4">
                        ID
                    </th>
                    <th class="w-1/3 p-4">
                        Nome
                    </th>
                    <th class="w-1/3 p-4">
                        Data de Registo
                    </th>
                    <th class="w-1/3 p-4">
                        Ações
                    </th>
                </tr>
            </thead>
            <tbody class="text-sm divide-y divide-gray-200 bg-indigo-50">
                @foreach($volunteers as $volunteer)
                    <tr class="whitespace-nowrap">
                        <td class="p-4">{{ $volunteer->id }}</td>
                        <td class="p-4">{{ $volunteer->name }}</td>
                        <td class="p-4">{{ $volunteer->createdAt() }}</td>
                        <td class="flex space-x-1 items-center">
                            {{-- Edit Button --}}
                            <livewire:volunteers.edit :volunteer="$volunteer" :wire:key="'edit-volunteer'. now() . $volunteer->id" >

                            {{-- Delete Button --}}
                            <livewire:volunteers.delete :volunteer="$volunteer" :wire:key="'delete-volunteer-'. $volunteer->id" >
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="p-2 bg-indigo-50">
            {{$volunteers->links()}}
        </div>
    </div>
</div>
