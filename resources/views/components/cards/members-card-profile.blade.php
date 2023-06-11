<article class="flex flex-col rounded-lg items-center md:max-w-md">
    <header>
        <img src="{{asset($content->picture)}}" class="rounded">
    </header>
    <div class="flex flex-col w-full items-center px py-1 -4 hover:bg-gray-100">
        <p>{{$content->name}}</p>
        <div>
            @if($content->role)
                <em class="font-bold text-nrp-blue">{{$content->role}}</em>
            @endif
        </div>
    </div>
</article>