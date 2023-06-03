@props(['title' => null])
<div class="max-w-5xl m-auto text-xl text-justify">
    <div class="font-bold text-3xl mb-2 mt-6">{{ $title }}</div>
    <div class="leading-relaxed space-y-12">{{ $slot }}</div>    
</div>