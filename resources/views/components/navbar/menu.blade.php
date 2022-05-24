@props(['ligado' => false, 'href' => '#'])
<li class="mx-4 my-6 md:my-0 flex-shrink-0 list-none">
    <a href="{{ $href }}" class="block mt-4 md:inline-block md:mt-0
    hover:bluetextFromLogo duration-500 border-0 hover:border-b-2
    hover:border-b-cyan-600">
        {{ $slot }}
    </a>
</li>