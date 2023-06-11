<x-guestLayout>
    {{--Page title--}}
    <x-slot name="title">
        {{ ('Equipa Guiné-Bissau') }}
    </x-slot>

    <x-cards.page_hero pageName="Quem Somos" image="/images/selected/equipa_bissau.jpg" />

    <x-section>
        <x-paragraph title="Equipa Guiné-Bissau"></x-paragraph>

        <div class="my-4">            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($profiles as $profile)
                    <x-cards.members-card-profile :content="$profile" />
                @endforeach
            </div>
        </div>
    </x-section>
</x-guestLayout>