<div class="p-2">
    <div class="flex gap-4">
        <x-jet-button wire:click="openModalToProfileVolunteer" class="bg-[#264653] hover:bg-[#125961] px-4 py-1.5">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 16" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 
                3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 
                12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
            </svg>
        </x-jet-button>
    </div>

    @if($openModal)
        <x-jet-dialog-modal wire:model="openModal">

            {{-- Modal Title --}}
            <x-slot name="title" >
              {{-- I don't Like The Title To Appear on Modal Top --}}
            </x-slot>

            {{-- Modal Content --}}
            <x-slot name="content">
                <div class="grid grid-flow-col md:grid-cols-3">
                    <div class="col-span-1">
                        <img src="img/user/menprofile.jpg" class="object-cover w-full h-full rounded" 
                        alt="Fotografia de perfil do voluntário">
                    </div>
                    <div class="col-span-2 pl-4 space-y-4">
                        {{-- Modal Title--}}
                        <div class="Title">
                            <h3>{{ __('Perfil do voluntário') }}</h3>
                        </div>

                        {{-- Personal Informations --}}
                        <div class="flex flex-col space-y-4">
                            {{-- Name--}}
                            <div class="flex gap-2">
                                <strong>Nome: </strong> {{ $volunteer->name }}
                            </div>
                            <div class="flex gap-2">
                                <strong>Telefone: </strong> {{ $volunteer->phone }}
                                <strong>Email: </strong> {{ $volunteer->email }}
                            </div>
                            <div class="flex gap-2">
                                <strong>Morada: </strong> {{ $volunteer->address }}
                                <strong>Localidae: </strong> {{ $volunteer->location }}
                            </div>
                        </div>´
                        {{-- User Motivation--}}
                        <div class="flex flex-col gap-2">
                            <label for="$volunteer.motivation" class="font-bold">Motivação</label>
                            {{ $volunteer->motivation }}
                        </div>
                    </div>
                </div>
            </x-slot>

             {{-- Modal Footer --}}
            <x-slot name="footer">
                {{-- Cancel Button --}}
                <x-buttons.btn-secondary wire:click="$toggle('openModal')">
                    {{ __('Cancelar') }}
                </x-buttons.btn-secondary>

                {{-- Delete Button --}}
                <x-jet-danger-button wire:click="status" wire:loading.attr='disabled'>
                    @if($volunteer->status == true)
                        {{ __('Desativar') }}
                    @else
                        {{ __('Ativar') }}
                    @endif
                </x-jet-danger-button>
            </x-slot>

        </x-jet-dialog-modal>
    @endif

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
