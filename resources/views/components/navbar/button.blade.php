@props(['ligado' => false, 'href' => '#'])

<li class="mx-4  rounded-full px-1">
    <a href="{{ $href }}" class="hover:text-cyan-500 duration-500 ">
        {{ $slot }}
    </a>
</li>