<div class="flex flex-row gap-2 pointer-events-none">
    <div class="relative w-full flex flex-col gap-2 justify-center items-start bg-transparent">
        <input class="w-full text-gray-600 bg-gray-200 placeholder-gray-600 rounded-lg shadow-md 
        pointer-events-auto ring-[0.1px] ring-[#5ba057] border border-transparent outline-none focus:ring-2 
        focus:ring-[#5ba057]"  type="text" wire:model="email" placeholder="Email" value="david.freitas@aeg1.pt">

        @error('email') 
            <div class="absolute top-14 h-auto text-yellow-300">
                {{ $message }}
            </div>
        @enderror
        @if (session()->has('message'))
            <div class="absolute top-14 h-auto text-[#5ba057]">
                {{ session('message') }}
            </div>
        @endif

    </div>
    <input class="inline-block  font-bold text-sm text-white/90 px-4 py-3 bg-[#5ba057]
    rounded-lg shadow-md cursor-pointer pointer-events-auto hover:bg-white hover:text-gray-600 hover:ring-1 
    hover:ring-[#4ca747] hover:shadow-lg  transition-all duration-500 ease-in-out" type="button" wire:click="add"
    value="SUBSCREVER">
</div>
