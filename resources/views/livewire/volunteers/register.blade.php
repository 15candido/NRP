@php 
    $disabled = $errors->any() || empty($this->name) || empty($this->phone) || empty($this->email)
    || empty($this->address) || empty($this->location) || empty($this->postcode) || empty($this->motivation) ? true : false;
@endphp
<section class="w-1/2  mx-auto p-4 space-y-4 rounded-xl shadow-lg hover:shadow-xl">
    
    {{-- Alerts Message Component --}}
    <x-alerts.message /> 

    {{-- Title --}}
    <h3>Registar com voluntário Rota</h3>
    <form wire:submit.prevent='register' class="space-y-4">
        <div class="flex flex-col md:flex-row space-y-4 md:space-x-4 md:space-y-0">
        
            {{-- Name --}}
            <div class="flex flex-col w-full space-y-2 ">
                <input wire:model.debounce.500ms="name" class="block w-full border-gray-300 placeholder-gray-400 rounded-md focus:ring-4
                focus:ring-blue-300 focus:ring-opacity-25 focus:border-blue-300 focus:border-opacity-75" name="name" id="name"
                type="text" placeholder="Nome">
                @error('name') <span  class="text-orange-500">{{ $message }}</span> @enderror
            </div>

            {{-- Phone --}}
            <div class="flex flex-col w-full space-y-2 ">
                <input wire:model.debounce.500ms="phone" class="block w-full border-gray-300 placeholder-gray-400 rounded-md focus:ring-4
                focus:ring-blue-300 focus:ring-opacity-25 focus:border-blue-300 focus:border-opacity-75" name="phone" id="phone"
                type="tel" placeholder="Telemóvel">
                @error('phone') <span  class="text-orange-500">{{ $message }}</span> @enderror
            </div>

        </div>
        {{-- Email --}}
        <div class="flex flex-col w-full space-y-2 ">
            <input wire:model.debounce.500ms="email" class="block w-full border-gray-300 placeholder-gray-400 rounded-md focus:ring-4
            focus:ring-blue-300 focus:ring-opacity-25 focus:border-blue-300 focus:border-opacity-75" name="email" id="email"
            type="email" placeholder="Email">
            @error('email') <span  class="text-orange-500">{{ $message }}</span> @enderror
        </div>

        {{-- Address --}}
        <div class="flex flex-col w-full space-y-2 ">
            <input wire:model.debounce.500ms="address" class="block w-full border-gray-300 placeholder-gray-400 rounded-md focus:ring-4
            focus:ring-blue-300 focus:ring-opacity-25 focus:border-blue-300 focus:border-opacity-75" name="address" id="address"
            type="text" placeholder="Morada">
            @error('address') <span  class="text-orange-500">{{ $message }}</span> @enderror
        </div>
        <div class="flex flex-col md:flex-row space-y-4 md:space-x-4 md:space-y-0">
            {{-- Location --}}
            <div class="flex flex-col w-full space-y-2 ">
                <input wire:model.debounce.500ms="location" class="block w-full border-gray-300 placeholder-gray-400 rounded-md focus:ring-4
                focus:ring-blue-300 focus:ring-opacity-25 focus:border-blue-300 focus:border-opacity-75" name="location" id="location"
                type="text" placeholder="Localidade">
                @error('location') <span  class="text-orange-500">{{ $message }}</span> @enderror
            </div>

            {{-- Post Code --}}
            <div class="flex flex-col w-full space-y-2 ">
                <input wire:model.debounce.500ms="postcode" class="block w-full border-gray-300 placeholder-gray-400 rounded-md focus:ring-4
                focus:ring-blue-300 focus:ring-opacity-25 focus:border-blue-300 focus:border-opacity-75" name="postcode" id="postcode"
                type="text" placeholder="Código Postal">
                @error('postcode') <span  class="text-orange-500">{{ $message }}</span> @enderror
            </div> 
        </div>
        
        {{-- Motivation --}}
        <div class="flex flex-col w-full space-y-2 ">
            <textarea  wire:model.debounce.500ms="motivation" class="block w-full text- border-gray-300 placeholder-gray-400  
            rounded-md focus:ring-4 focus:ring-blue-300 focus:ring-opacity-25 focus:border-blue-300 focus:border-opacity-75" 
            cols="30" rows="8">
            </textarea>
            @error('motivation') <span  class="text-orange-500">{{ $message }}</span> @enderror
        </div>
        
        {{-- Submit Button --}}
        <x-buttons.primary wire:target='register' wire:loading.attr='disabled' type="submit" :disabled="$disabled" >
            {{ __('Registar') }}
        </x-buttons.primary>
    </form>

</section>
