@props(['src', 'title', 'fromPage' => null, 'toPage' => null, 'childPage' =>null, 'alt' => null])
<div class="relative flex w-full h-96 justify-center items-center bg-gray-700">
    <img src="{{ $src }}" alt="{{ $alt }}" class="absolute w-full h-full object-cover object-center">
    <div class="absolute flex flex-col max-w-7xl text-base font-bold text-white justify-center items-center space-y-4">
        <h1 class="bg-[#264653] p-4 bg-opacity-50 text-4xl font-black text-white uppercase">{{ $title }}</h1>
        @if ($fromPage & $toPage)
            <span class="">
                <a href="\" class="hover:text-[#1368aa]">{{ $fromPage }}</a>  >  
                <a href="\" class="hover:text-[#1368aa]">{{ $toPage }}</a> 
                @if($childPage) 
                   > <a href="\" class="hover:text-[#1368aa]">{{$childPage}}</a>
                @endif
            </span>
        @endif
    </div>
</div>