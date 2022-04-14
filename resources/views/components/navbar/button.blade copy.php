@props(['ligado' => false, 'href' => '#'])

<a href="{{ $href }}">
    <div class="text-xl rounded mx-12 @if ($ligado) bg-green-400 @else bg-red-400 @endif  text-white px-8 py-8 border hover:bg-green-500">
        {{ $slot }}
    </div>    
</a>