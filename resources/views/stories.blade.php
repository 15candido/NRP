<x-guestLayout>
    {{--Page title--}}
    <x-slot name="title">
        {{ ('História') }}
    </x-slot>
    <div class="flex flex-col min-h-screen justify-start items-center">
        <x-page-header src="images/project/carouselhistory.jpg" title="A Nossa História" fromPage="Quem somos" toPage="A nossa história" alt="Viagens" /> <!--about us hero image -->
        <x-cards.structureWhitOutBg>
            <div class="grid grid-flow-row">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                    @foreach($stories as $story)
                    <x-cards.page-card-briefing :content="$story" />
                    @endforeach
                    @foreach($stories as $storiyimage)
                    <x-cards.page-card-image :image="$storiyimage->image" />
                    @endforeach
                </div>
            </div>
        </x-cards.structureWhitOutBg>
        <x-cards.structureWithBg>
            <h4>Linha de tempo</h4>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
                @foreach($storytimelines as $timeline)
                <x-cards.story-card-time-line :content="$timeline" />
                @endforeach
            </div>
        </x-cards.structureWithBg>
        <x-cards.structureWhitOutBg>
            <strong class="title">Sócios fundadores</strong>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
                @foreach($founders as $founder)
                <x-cards.founders-card-profile :content="$founder" />
                @endforeach
            </div>
        </x-cards.structureWhitOutBg>
    </div>
</x-guestLayout>