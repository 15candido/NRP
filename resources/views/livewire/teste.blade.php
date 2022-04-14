<div>
    Nome: <input class="p-2 border" type="text" wire:model="user_id">
    <button class="bg-red-400 text-white p-4 rounded" wire:click="procura">Procura</button>

    <x-user size="big" :user="$user"/>
</div>
