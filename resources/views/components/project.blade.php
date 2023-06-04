@props(['image' => null, 'name' => null])
<a href="#" class="hover:scale-[1.01]">
    <article class="h-full border-solid shadow-lg border-gray-300 border-2 overflow-hidden rounded-xl ">
        <img src="{{ $image }}">
        <div class="px-4 py-2 rounded-lg">
            <p class="font-bold">{{ $name }}</p>
            <div>{!! $slot !!}</div>
        </div>
    </article>
</a>