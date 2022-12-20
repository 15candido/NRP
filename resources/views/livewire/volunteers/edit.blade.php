<div class="p-4">
    @php 
        $disabled = $errors->any() || empty($this->volunteer->name) || empty($this->volunteer->phone) || empty($this->volunteer->email)
        || empty($this->volunteer->address) || empty($this->volunteer->location) || empty($this->volunteer->postcode) || empty($this->volunteer->motivation) ? true : false;
    @endphp

    <div class="flex gap-4">
        
        {{--Call Jetstream Button --}}
        <x-jet-button class="bg-yellow-500 hover:bg-yellow-600 px-4 py-1.5" wire:click="openModalToUpdateVolunteer" 
        wire:loading.attr="disabled">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5
                4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 
                2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
            </svg>
        </x-jet-button>

        @if($openModal)
            <x-jet-dialog-modal wire:model="openModal">
                {{-- Content --}}
                <x-slot name="content">
                    <section class="w-full  mx-auto space-y-4">
                        {{-- Title --}}
                        <x-slot name="title">
                            {{ __('Editar Informação') }}
                        </x-slot>

                        {{-- Form --}}
                        <form wire:submit.prevent='update' class="space-y-4" id="UpdateForm-{{ $this->formId }}">
                            @csrf
                            <div class="flex flex-col md:flex-row space-y-4 md:space-x-4 md:space-y-0">
                            
                                {{-- Name --}}
                                <div class="flex flex-col w-full space-y-2 ">
                                    <input wire:model.debounce.500ms="volunteer.name" class="block w-full border-gray-300 placeholder-gray-400 rounded-md focus:ring-4
                                    focus:ring-blue-300 focus:ring-opacity-25 focus:border-blue-300 focus:border-opacity-75" name="name" id="name"
                                    type="text" placeholder="Nome">
                                    @error('volunteer.name') <span  class="text-orange-500">{{ $message }}</span> @enderror
                                </div>

                                {{-- Phone --}}
                                <div class="flex flex-col w-full space-y-2 ">
                                    <input wire:model.debounce.500ms="volunteer.phone" class="block w-full border-gray-300 placeholder-gray-400 rounded-md focus:ring-4
                                    focus:ring-blue-300 focus:ring-opacity-25 focus:border-blue-300 focus:border-opacity-75" name="phone" id="phone"
                                    type="tel" placeholder="Telemóvel">
                                    @error('volunteer.phone') <span  class="text-orange-500">{{ $message }}</span> @enderror
                                </div>

                            </div>
                            {{-- Email --}}
                            <div class="flex flex-col w-full space-y-2 ">
                                <input wire:model.debounce.500ms="volunteer.email" class="block w-full border-gray-300 placeholder-gray-400 rounded-md focus:ring-4
                                focus:ring-blue-300 focus:ring-opacity-25 focus:border-blue-300 focus:border-opacity-75" name="email" id="email"
                                type="email" placeholder="Email">
                                @error('volunteer.email') <span  class="text-orange-500">{{ $message }}</span> @enderror
                            </div>

                            {{-- Address --}}
                            <div class="flex flex-col w-full space-y-2 ">
                                <input wire:model.debounce.500ms="volunteer.address" class="block w-full border-gray-300 placeholder-gray-400 rounded-md focus:ring-4
                                focus:ring-blue-300 focus:ring-opacity-25 focus:border-blue-300 focus:border-opacity-75" name="address" id="address"
                                type="text" placeholder="Morada">
                                @error('volunteer.address') <span  class="text-orange-500">{{ $message }}</span> @enderror
                            </div>
                            <div class="flex flex-col md:flex-row space-y-4 md:space-x-4 md:space-y-0">
                                {{-- Location --}}
                                <div class="flex flex-col w-full space-y-2 ">
                                    <input wire:model.debounce.500ms="volunteer.location" class="block w-full border-gray-300 placeholder-gray-400 rounded-md focus:ring-4
                                    focus:ring-blue-300 focus:ring-opacity-25 focus:border-blue-300 focus:border-opacity-75" name="location" id="location"
                                    type="text" placeholder="Localidade">
                                    @error('volunteer.location') <span  class="text-orange-500">{{ $message }}</span> @enderror
                                </div>

                                {{-- Post Code --}}
                                <div class="flex flex-col w-full space-y-2 ">
                                    <input wire:model.debounce.500ms="volunteer.postcode" class="block w-full border-gray-300 placeholder-gray-400 rounded-md focus:ring-4
                                    focus:ring-blue-300 focus:ring-opacity-25 focus:border-blue-300 focus:border-opacity-75" name="postcode" id="postcode"
                                    type="text" placeholder="Código Postal">
                                    @error('volunteer.postcode') <span  class="text-orange-500">{{ $message }}</span> @enderror
                                </div> 
                            </div>
                            
                            {{-- Motivation --}}
                            <div class="flex flex-col w-full space-y-2 ">
                                <textarea  wire:model.debounce.500ms="volunteer.motivation" class="block w-full text- border-gray-300 placeholder-gray-400  
                                rounded-md focus:ring-4 focus:ring-blue-300 focus:ring-opacity-25 focus:border-blue-300 focus:border-opacity-75" 
                                cols="30" rows="8">
                                </textarea>
                                @error('volunteer.motivation') <span  class="text-orange-500">{{ $message }}</span> @enderror
                            </div>
                        </form>
                    </section>
                </x-slot>

                {{-- The Footer Modal --}}
                <x-slot name="footer">
                    {{-- Cancel Button --}}
                    <x-buttons.btn-secondary wire:click="$toggle('openModal')">
                        {{ __('Cancelar') }}
                    </x-buttons.btn-secondary>

                    {{-- Submit Button --}}
                    <x-buttons.btn-primary wire:target='update' wire:loading.attr='disabled' type="submit" :disabled="$disabled" 
                    form="UpdateForm-{{ $this->formId }}" >
                        {{ __('Atualizar') }}
                    </x-buttons.btn-primary>
                </x-slot>
            </x-jet-dialog-modal>
        @endif
    </div>
</div>


@push('scripts')
    <script>

        // Emit Browser Event
        Livewire.on('updated', function(e){
            Swal.fire({
                title: e.title
                , icon: e.icon
                , iconColor: e.iconColor
                , timer: 3000
                , toast: true
                , position: 'top-right'
                , timerProgressBar: true
                , showConfirmButton: false
            });
        });
    </script>
@endpush

