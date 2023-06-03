@props(['title' => null])
<div class="m-auto text-justify">
    @if ($title) <div class="font-bold text-3xl mb-2 mt-6">{{ $title }}</div> @endif
    <div class="space-y-3">
        {!! $slot !!}
    </div>    
</div>