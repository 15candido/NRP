<div class="p-4">
    @php 
        $disabled = $errors->any() || empty($this->name) || empty($this->phone) || empty($this->email)
        || empty($this->address) || empty($this->location) || empty($this->postcode) || empty($this->motivation) ? true : false;
    @endphp

    <div class="flex gap-4">
        <x-jet-button class="bg-[#6cbf67] hover:bg-[#5ba057]" wire:click="openModalToRegisterVolunteer" wire:loading.attr="disabled">
            {{ __('Adicionar Voluntário') }}
        </x-jet-button>
        <div class="w-10/12">
            {{-- Alerts Message Component --}}
            <x-alerts.message /> 
        </div>
        <x-jet-confirmation-modal wire:model="openModal">
            <x-slot name="title">
                Delete Account
            </x-slot>

            <x-slot name="content">
                Are you sure you want to delete your account? Once your account is deleted, all of its resources and data will be permanently deleted.
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$toggle('openModal')" wire:loading.attr="disabled">
                    Nevermind
                </x-jet-secondary-button>

                <x-jet-danger-button class="ml-2" wire:click="deleteUser" wire:loading.attr="disabled">
                    Delete Account
                </x-jet-danger-button>
            </x-slot>
        </x-jet-confirmation-modal>
    </div>
    
</div>