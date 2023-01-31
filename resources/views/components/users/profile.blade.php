<div class="flex flex-col rounded-lg shadow-md items-center md:max-w-md">
    <a href="#" class="pointer-events-none">
        <img class="pointer-events-auto hover:opacity-75" src="{{$profile->picture}}" alt="">
    </a>
    <div class="p-4 space-y-2 hover:bg-gray-100">
        <h4><a href="#" class="border-b-[1px] border-[#0082b3] border-opacity-75 hover:border-b-4 
            hover:border-opacity-100 transition-all duration-300 ease-in-out">{{$profile->name}}</a></h4>
        <div>
            @if($profile->role)
            <p class="font-black">{{$profile->role}}</p>
            @endif
            <p class="text-base text-gray-600">{{$profile->abstract}}</p>
        </div>
    </div>
</div>