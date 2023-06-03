@props(['image' => null, 'name' => null])
<article class="shadow-xl bg-blue-100 rounded-xl">
    <img src="{{ $image }}" class="hover:opacity-75">
    <div class="p-4 rounded-lg">
        <a href="#">
            <h4>{{ $name }}</h4>
        </a>
        <div>{!! $slot !!}</div>        
    </div>
    <div class="border h-16 w-16 px-4">
        A
    </div>
</article>