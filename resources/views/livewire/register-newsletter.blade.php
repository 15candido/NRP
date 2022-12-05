@php
    $disabled = $errors->any() || empty($this->email) ? true : false; 
@endphp
<div>
    <form wire:submit.prevent="register" class="flex flex-col space-y-4">

        <div class="flex flex-row gap-2">
                {{-- Email --}}
                <x-jet-input id="email" wire:model.debounce.500ms="email" class="w-full block text-gray-600 bg-gray-200
                placeholder-gray-600 rounded-lg shadow-md pointer-events-auto ring-[0.1px] ring-[#5ba057] border 
                border-transparent focus:outline-none focus:ring focus:ring-[#5ba057]" type="email" name="email" 
                :value="old('email')" required autofocus />

                {{-- Submit Button --}}
                <x-buttons.primary wire:target='register' wire:loading.attr='disabled' type="submit" :disabled="$disabled">
                    {{ ('SUBSCREVER') }}
                </x-buttons.primary>
        </div>
        
        <div class="w-full">

            {{-- Display warning error --}}
            @error('email')
                <x-jet-input-error for='email' class="text-yellow-300" />
            @enderror

            {{-- Display sucess message --}}
            @if(session()->has('success'))
                <div class="h-auto text-[#5ba057]">
                    {{session('success')}}
                </div>
            @endif
        </div>
        
    </form>
</div>