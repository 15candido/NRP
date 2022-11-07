@props(['src', 'title', 'fromPage' => null, 'toPage' => null, 'alt' => null])
<div class="relative flex w-full h-96 justify-center items-center bg-gray-700">
    <img src="{{ $src }}" alt="{{ $alt }}" class="absolute w-full h-full object-cover object-center">
    <div class="absolute flex flex-col max-w-7xl text-base font-bold text-white justify-center items-center space-y-4">
        <h1 class="bg-blue-900 p-4 bg-opacity-50 text-4xl font-black uppercase">{{ $title }}</h1>
        @if ($fromPage & $toPage)
            <span class="">
                <a href="\" class="hover:text-[#1368aa]">{{ $fromPage }}</a>  >  
                <a href="projetos" class="hover:text-[#1368aa]">{{$toPage}}</a>
            </span>
        @endif
    </div>
</div>