@php 
    $disabled = $errors->any() || empty($this->name) || empty($this->email) ? true : false;
@endphp
<section class="w-1/2  p-4 mx-auto space-y-4 shadow">
    <h3>Registar com voluntário Rota</h3>
    
    <form wire:submit.prevent='register' class="space-y-4">
        {{-- Nome --}}
        <div class="space-y-4">
            <x-jet-label for="name" value="{{ __('Nome') }}" />
            <x-jet-input wire:model.debounce.500ms="name" class="block w-full" name="name" id="name"
            type="text" />
            <x-jet-input-error for='name' class="text-orange-500" />
        </div>
        {{-- Email --}}
        <div class="space-y-4">
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <x-jet-input wire:model.debounce.500ms="email" class="block w-full" name="email" id="email"
            type="text"/>
            <x-jet-input-error for='email' class="text-orange-500" />
        </div>

        {{-- Phone Number --}}
        <div class="space-y-4">
            <x-jet-label for="phone" value="{{ __('Telemóvel') }}" />
            <x-jet-input wire:model.debounce.500ms="phone" class="block w-full" name="phone" id="phone"
            type="tel"/>
            <x-jet-input-error for='phone' class="text-orange-500" />
        </div>

        {{-- Address --}}
        <div class="space-y-4">
            <x-jet-label for="address" value="{{ __('Morada') }}" />
            <x-jet-input wire:model.debounce.500ms="address" class="block w-full" name="address" id="address"
            type="text"/>
            <x-jet-input-error for='address' class="text-orange-500" />
        </div>

        
        {{-- Location --}}
        <div class="space-y-4">
            <x-jet-label for="location" value="{{ __('Localidade') }}" />
            <x-jet-input wire:model.debounce.500ms="location" class="block w-full" name="location" id="location"
            type="text"/>
            <x-jet-input-error for='location' class="text-orange-500" />
        </div>
        
        {{-- Post Code --}}
        <div class="space-y-4">
            <x-jet-label for="postcode" value="{{ __('Código Postal') }}" />
            <x-jet-input wire:model.debounce.500ms="postcode" class="block w-full" name="postcode" id="postcode"
            type="number"/>
            <x-jet-input-error for='postcode' class="text-orange-500" />
        </div>

        {{-- Motivation --}}
        <div class="space-y-4">
            <x-jet-label for="motivatio" value="{{ __('Motivação') }}" />
            <jet-textarea wire:model.debounce.500ms="motivation" class="block w-full"  name="motivation" 
            id="motivation" type="textarea" />
            <x-jet-input-error for='motivatio' class="text-orange-500" />
        </div>
        
        
        {{-- Submit Button --}}
        <x-buttons.primary wire:target='register' wire:loading.attr='disabled' type="submit" :disabled="$disabled" >
            {{ __('Registar') }}
        </x-buttons.primary>
    </form>

</section>