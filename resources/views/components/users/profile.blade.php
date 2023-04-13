<div class="flex flex-col rounded-lg shadow-md items-center md:max-w-md">
    <a href="#" class="pointer-events-none">
        <img class="hover:opacity-75" src="{{$profile->picture}}" alt="">
    </a>
    <div class="flex flex-col w-full items-center p-4 pointer-events-none hover:bg-gray-100">

        <a href="#" class="uppercase border-b-[1px] border-solid border-[#0082b3] border-opacity-75">
            {{$profile->name}}
        </a>

        <div>
            @if($profile->role)
            <em class="font-bold">{{$profile->role}}</em>
            @endif
            <p>{{$profile->abstract}}</p>
        </div>
    </div>
</div>