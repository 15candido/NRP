@foreach($areas as $area)
    <div class="flex flex-col w-full justify-start items-center gap-4 py-4 px-1">
        <div class="relative flex w-20 h-20 self-center justify-center items-center bg-gray-100 rounded-full">
            <img src="{{$area->icon}}" alt="{{$area->alt}}" class="absolute w-full object-cover object-center"/>
        </div>
        <h2 class="text-lg font-extrabold text-center text-[#264653]">{{$area->name}}</h2>
    </div>
@endforeach
