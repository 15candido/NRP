<div class="relative bg-nrp-blue my-16 h-1/2" wire:click="refresh">
    @php
    $rotation = collect(['-rotate-1', 'rotate-0', 'rotate-1']);
    @endphp
    <div class="max-w-full m-auto">
        <div class="grid grid-cols-2 gap-6">
            <div class="p-8">
                <img src="images/highlights/{{ $highlight->image }}" class="w-[893px] h-96 object-cover border-white border-solid border-8 
                {{ $rotation->random() }} rounded">
            </div>
            <div class="self-center mx-16 ">
                @if ($highlight->title)
                    <p class="text-center font-bold bg-white py-2 {{ $rotation->random() }} text-black text-3xl mb-2">{{ $highlight->title }}</p>
                @endif
                <p class="text-center text-white text-2xl">{{ $highlight->description }}</p>
            </div>
        </div>
    </div>
    <img class="absolute z-10 left-14 bottom-10 h-12" src="images/icons/refresh.svg" wire:click="refresh"/> 
</div>