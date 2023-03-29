<article class="flex flex-col rounded-lg shadow-md items-center md:max-w-md">
    <header>
        <img src="{{asset($content->picture)}}" class="hover:opacity-75">
    </header>
    <div class="flex flex-col w-full items-center p-4 hover:bg-gray-100">
        <strong href="#" class="uppercase border-b-[1px] border-solid border-[#0082b3] border-opacity-75 hover:border-b-4 
            hover:border-opacity-100 transition-all duration-300 ease-in-out">
            {{$content->name}}
        </strong>
        <div>
            @if($content->role)
            <em class="font-bold">{{$content->role}}</em>
            @endif
            <p>{{$content->abstract}}</p>
        </div>
    </div>
</article>