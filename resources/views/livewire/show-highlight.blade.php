<div class="bg-nrp-blue my-16 h-1/2" wire:click="refresh" >
    @php
        $rotation = collect(['-rotate-1', 'rotate-0', 'rotate-1']);        
    @endphp
    <div class="max-w-full m-auto">
        <div class="flex">
            <div class="w-1/2 p-8">
                <img src="images/highlights/{{ $highlight->image }}" class="border-white border-solid border-8 {{ $rotation->random() }} rounded">
            </div>
            <div class="w-1/2 self-center mx-16 ">
                @if ($highlight->title)
                    <p class="text-center font-bold bg-white {{ $rotation->random() }} text-black text-3xl mb-2">{{ $highlight->title }}</p>
                @endif
                <p class="text-center text-white text-2xl">{{ $highlight->description }}</p>    
            </div>
        </div>
    </div>
    <img class="h-12" src="images/icons/refresh.svg" wire:click="refresh"/>
</div>
