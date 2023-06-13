@props(['title' => null, 'subtitle' => null, 'bg' => null])
<div class="m-auto text-justify mx-3">
    @if ($title) <div class="font-bold text-nrp-blue text-3xl mb-2  @if ($bg) text-white @endif">{{ $title }}</div> @endif
    @if ($subtitle) <div class="font-bold text-nrp-blue text-2xl mb-2  @if ($bg) text-white @endif">{{ $subtitle }}</div> @endif
    <div class="space-y-3">
        {!! $slot !!}
    </div>    
</div>