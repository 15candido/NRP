@props(['size'=>null])
@if ($size == 'full')
    <div class="w-full m-auto px-16">
@else 
    <div class="max-w-5xl m-auto">
@endif
        {{ $slot }}
    </div>