
    <div>
        {{--Page title--}}
        <x-slot name="title">
            {{ ('Voluntariado') }}
        </x-slot>

        <div class="flex flex-col min-h-screen items-center">
          
            <x-cards.structureWhitOutBg>
                <div class="flex flex-col lg:flex-row justify-start items-start py-20 gap-10">
                    <livewire:volunteers.register>
                </div>
            </x-cards.structureWhitOutBg>
        </div>
    </div>
