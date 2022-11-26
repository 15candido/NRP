<div>
    <div>
        <input class="text-black" type="text" wire:model="email" placeholder="Email" value="david.freitas@aeg1.pt">
        @error('email') <div class="text-red-600">{{ $message }}</div> @enderror
        @if (session()->has('message'))
            <div class="text-green-400">
                {{ session('message') }}
            </div>
        @endif
    </div>
    <input type="button" wire:click="add" value="Adicionar">

</div>
