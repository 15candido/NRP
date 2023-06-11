<x-guestLayout>
    {{--Page title--}}
    <x-slot name="title">
        {{ ('Orgãos Sociais') }}
    </x-slot>

    <x-cards.page_hero pageName="Quem Somos" image="/images/selected/who_we_are.jpg" />

    <x-section>
        <x-paragraph title="Órgãos Sociais"></x-paragraph>

        <div class="my-4">
            <p class="text-2xl text-nrp-blue font-semibold mb-4">Direção</p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach($profiles as $profile)
                    @if($profile->position == 'CEO')
                    <x-cards.members-card-profile :content="$profile" />
                    @endif
                    @endforeach
            </div>
        </div>

        <hr class="my-12"/>

        <div class="my-4">
            <p class="text-2xl text-nrp-blue font-semibold mb-4">Conselho fiscal</p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($profiles as $profile)
                @if($profile->position == 'Supervisory board')
                <x-cards.members-card-profile :content="$profile" />
                @endif
                @endforeach
            </div>
        </div>
        
        <hr class="my-12"/>

        <div class="my-4 mb-12">
            <p class="text-2xl text-nrp-blue font-semibold mb-4">Mesa da assembleia geral</p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($profiles as $profile)
                    @if($profile->position == 'General assembly table')
                        <x-cards.members-card-profile :content="$profile" />
                    @endif
                @endforeach
            </div>
        </div>
    </x-section>    
</x-guestLayout>