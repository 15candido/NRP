@props(['ligado' => false, 'href' => '#'])

<li class="mx-4  my-6 sm:my-0">
    <a href="{{ $href }}" class="hover:text-cyan-500 duration-500 ">
        {{ $slot }}
    </a>
</li>