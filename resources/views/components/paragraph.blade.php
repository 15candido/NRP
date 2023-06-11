@props(['title' => null, 'subtitle' => null, 'bg' => null])
<div class="m-auto text-justify">
    @if ($title) <div class="font-bold text-nrp-blue text-3xl mb-2  @if ($bg) text-white @endif">{{ $title }}</div> @endif
    @if ($subtitle) <div class="font-bold text-nrp-blue text-xl mb-2  @if ($bg) text-white @endif">{{ $title }}</div> @endif
    <div class="space-y-3">
        {!! $slot !!}
    </div>    
</div>