<!-- @props(['src', 'title', 'fromPage' => null, 'toPage' => null, 'childPage' =>null, 'alt' => null]) -->
<div class="relative flex w-full h-96 justify-center items-center data-block">
    <img src="{{ $pageHero->hero_image }}" class="absolute w-full h-full object-cover object-center">
    <div class="absolute flex flex-col max-w-7xl font-bold text-white justify-center items-center space-y-4">
        <h2 class="bg-[#264653] p-4 bg-opacity-50">{{ $pageHero->name }}</h2>
    </div>
</div>