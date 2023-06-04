@props(['number' => null])
<div class="w-full h-full  overflow-hidden justify-start items-center text-center rounded border-solid border-nrp-blue border">
    @if ($number) <div class="py-1 bg-nrp-blue w-full text-3xl font-extrabold text-white rounded-t">{{ $number }}</div> @endif
    <p class="py-1 font-bold ">{{ $slot }}</p>
</div>
