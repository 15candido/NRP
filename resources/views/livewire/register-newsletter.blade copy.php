<div class="flex flex-col space-y-2">
    <form wire:submit.prevent='register' class="space-y-4">
        <div class="flex flex-row gap-2 pointer-events-none">
            <div class="relative w-full flex flex-col gap-2 justify-center items-start bg-transparent">
                <input class="w-full text-gray-600 bg-gray-200 placeholder-gray-600 rounded-lg shadow-md 
                pointer-events-auto ring-[0.1px] ring-[#75c171] border border-transparent outline-none focus:ring-2 
                focus:ring-[#5ba057]"  type="email" wire:model="email" placeholder="Email" name="email" id="email">
            </div>
            <input class="inline-block  font-bold text-sm text-white/90 px-4 py-3 bg-[#5ba057]
            rounded-lg shadow-md cursor-pointer pointer-events-auto hover:bg-white hover:text-gray-600 hover:ring-1 
            hover:ring-[#4ca747] hover:shadow-lg  transition-all duration-500 ease-in-out" type="submit" wire:click="register"
            value="SUBSCREVER">
        </div>
        <div class="flex">
            @error('email') 
                <div class="text-yellow-300">
                    {{ $message }}
                </div>
            @enderror
            @if (session()->has('message'))
                <div class="h-auto text-[#5ba057]">
                    {{ session('message') }}
                </div>
            @endif
        </div>
    </form>
</div>


