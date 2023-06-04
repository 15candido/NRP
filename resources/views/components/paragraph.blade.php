@props(['title' => null, 'bg' => null])
<div class="m-auto text-justify">
    @if ($title) <div class="font-bold text-nrp-blue text-3xl mb-2 mt-12 @if ($bg) text-white @endif">{{ $title }}</div> @endif
    <div class="space-y-3">
        {!! $slot !!}
    </div>    
</div>