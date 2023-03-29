<x-guestLayout>
    {{--Page title--}}
    <x-slot name="title">
        {{ $project->name }}
    </x-slot>
    <div class="flex flex-col min-h-screen justify-start items-center">
        <x-page-hero :pageHero="$project" /> <!--about us hero image -->
        <x-cards.structureWhitOutBg>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <x-cards.page-card-briefing :content="$project" />
                <x-cards.page-card-image :image="$project->image" />
            </div>
        </x-cards.structureWhitOutBg>
        <x-cards.structureWithBg>
            <h4>O que foi feito</h4>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
                @foreach($project->completedTasks as $done)
                <x-cards.outline :outline="$done" />
                @endforeach
            </div>
        </x-cards.structureWithBg>
    </div>
</x-guestLayout>