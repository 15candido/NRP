@props(['src', 'title', 'fromPage' => null, 'toPage' => null, 'childPage' =>null, 'alt' => null])
<div class="relative flex w-full h-96 justify-center items-center data-block">
    <img src="{{ $src }}" alt="{{ $alt }}" class="absolute w-full h-full object-cover object-center">
    <div class="absolute flex flex-col max-w-7xl font-bold text-white justify-center items-center space-y-4">
        <h2 class="bg-[#264653] p-4 bg-opacity-50">{{ $title }}</h2>
        @if ($fromPage & $toPage)
        <span class="">
            <a href="\" class="hover:text-[#1368aa]">{{ $fromPage }}</a> >
            <a href="\" class="hover:text-[#1368aa]">{{ $toPage }}</a>
            @if($childPage)
            > <a href="\" class="hover:text-[#1368aa]">{{$childPage}}</a>
            @endif
        </span>
        @endif
    </div>
</div>