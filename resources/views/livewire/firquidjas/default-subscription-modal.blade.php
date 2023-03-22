{{-- Standard subscription modal for firquidjas --}}
<div x-data="{open: false}">

    {{-- Enabling and disabling the button --}}
    @php
    $disabled = $errors->any() || empty($this->name) || empty($this->email) || empty($this->phone) || empty($this->iban)
    || empty($this->bank) || empty($this->swift) || empty($this->address) || empty($this->nif) ? true : false;
    @endphp

    {{-- Toggle button --}}
    <div class="flex flex-wrap">
        <button x-on:click="open = !open" class="inline-block p-3 font-bold text-white bg-[#5ba057]
        hover:bg-[#4ca747] rounded-lg shadow-md">
            {{ __('Inscrever-me')}}
        </button>
    </div>

    {{-- Toggle modal --}}
    <div x-show="open" x-transition:enter.duration.500ms x-transition:leave.duration.400ms class="fixed z-50 
    w-full h-full inset-0 p-4 ">

        {{-- Modal background  --}}
        <div class="fixed transform inset-0">
            <div class="absolute inset-0 bg-[#264653] bg-opacity-50"></div>
        </div>

        {{-- Modal --}}
        <div x-on:click.away="open = false" class="relative w-full h-full max-w-2xl md:top-1/2 md:left-1/2
        md:-translate-y-1/2 md:-translate-x-1/2 md:h-auto">
            <x-modal>

                {{-- Title --}}
                <x-slot name="title">
                    {{ __('Ficha de Inscrição')}}
                </x-slot>

                {{-- Content --}}
                <x-slot name="content">
                    <section class="w-full mx-auto space-y-4">
                        <form wire:submit.prevent='subscription' class="space-y-4" id="RegisterForm">

                            {{-- Name --}}
                            <div class="flex flex-col w-full space-y-2">
                                <input wire:model.debounce.500ms="name" class="block w-full border-gray-300 placeholder-gray-400 rounded-md 
                                    focus:ring-4 focus:ring-blue-300 focus:ring-opacity-25 focus:border-blue-300 focus:border-opacity-75" name="name" id="name" type="text" placeholder="Nome">
                                @error('name') <span class="text-orange-500">{{ $message }}</span> @enderror
                            </div>

                            {{-- Email & phone number --}}
                            <div class="flex flex-col space-y-4 md:flex-row md:space-x-4 md:space-y-0">
                                <div class="flex flex-col w-full space-y-2 ">
                                    <input wire:model.debounce.500ms="email" class="block w-full border-gray-300 placeholder-gray-400 rounded-md focus:ring-4
                                focus:ring-blue-300 focus:ring-opacity-25 focus:border-blue-300 focus:border-opacity-75" name="email" id="email" type="email" placeholder="Email">
                                    @error('email') <span class="text-orange-500">{{ $message }}</span> @enderror
                                </div>
                                <div class="flex flex-col w-full space-y-2 ">
                                    <input wire:model.debounce.500ms="phone" class="block w-full border-gray-300 placeholder-gray-400 rounded-md focus:ring-4
                                    focus:ring-blue-300 focus:ring-opacity-25 focus:border-blue-300 focus:border-opacity-75" name="phone" id="phone" type="tel" placeholder="Telemóvel">
                                    @error('phone') <span class="text-orange-500">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            {{-- IBAN --}}
                            <div class="flex flex-col space-y-2">
                                <input wire:model.debounce.500ms="iban" class="block w-full border-gray-300 placeholder-gray-400 rounded-md focus:ring-4
                                    focus:ring-blue-300 focus:ring-opacity-25 focus:border-blue-300 focus:border-opacity-75" name="iban" id="iban" type="text" placeholder="IBAN">
                                @error('iban') <span class="text-orange-500">{{ $message }}</span> @enderror
                            </div>

                            {{-- BANK & BIC SWIFT --}}
                            <div class="flex flex-col space-y-4 md:flex-row md:space-x-4 md:space-y-0">
                                <div class="flex flex-col w-full space-y-2 ">
                                    <input wire:model.debounce.500ms="bank" class="block w-full border-gray-300 placeholder-gray-400 rounded-md focus:ring-4
                                focus:ring-blue-300 focus:ring-opacity-25 focus:border-blue-300 focus:border-opacity-75" name="bank" id="bank" type="text" placeholder="Banco">
                                    @error('bank') <span class="text-orange-500">{{ $message }}</span> @enderror
                                </div>
                                <div class="flex flex-col w-full space-y-2 ">
                                    <input wire:model.debounce.500ms="swift" class="block w-full border-gray-300 placeholder-gray-400 rounded-md focus:ring-4
                                    focus:ring-blue-300 focus:ring-opacity-25 focus:border-blue-300 focus:border-opacity-75" name="swift" id="swift" type="text" placeholder="SWIFT">
                                    @error('swift') <span class="text-orange-500">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            {{-- Address & NIF --}}
                            <div class="flex flex-col space-y-4 md:flex-row md:space-x-4 md:space-y-0">
                                <div class="flex flex-col w-full space-y-2 ">
                                    <input wire:model.debounce.500ms="address" class="block w-full border-gray-300 placeholder-gray-400 rounded-md focus:ring-4
                                focus:ring-blue-300 focus:ring-opacity-25 focus:border-blue-300 focus:border-opacity-75" name="addres" id="address" type="text" placeholder="Morada">
                                    @error('address') <span class="text-orange-500">{{ $message }}</span> @enderror
                                </div>
                                <div class="flex flex-col w-full space-y-2 ">
                                    <input wire:model.debounce.500ms="nif" class="block w-full border-gray-300 placeholder-gray-400 rounded-md focus:ring-4
                                    focus:ring-blue-300 focus:ring-opacity-25 focus:border-blue-300 focus:border-opacity-75" name="nif" id="nif" type="text" placeholder="NIF">
                                    @error('nif') <span class="text-orange-500">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </form>
                    </section>
                </x-slot>

                {{-- Footer --}}
                <x-slot name="footer">
                    <div class="flex gap-2 justify-end">
                        {{-- Cancel button --}}
                        <x-buttons.btn-secondary x-on:click="open = false">
                            {{ __('Cancelar')}}
                        </x-buttons.btn-secondary>

                        {{-- Submit button --}}
                        <x-buttons.btn-primary wire:target="subscription" wire.loading.attr='disabled' type="submit" :disabled="$disabled" form="RegisterForm" x-on:click="open = false">
                            {{ __('Inscrever')}}
                        </x-buttons.btn-primary>
                    </div>
                </x-slot>

            </x-modal>
        </div>
    </div>
</div>

{{-- Pop up to inform subscription success --}}
@push('scripts')
<script>
    // Emit Browser Event
    Livewire.on('created', function(e) {
        Swal.fire({
            title: e.title,
            icon: e.icon,
            iconColor: e.iconColor,
            timer: 3000,
            toast: true,
            position: 'top-right',
            timerProgressBar: true,
            showConfirmButton: false
        });
    });
</script>
@endpush