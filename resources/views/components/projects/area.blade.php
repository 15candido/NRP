@foreach($areas as $area)
<div class="flex flex-col w-full h-full justify-start items-center gap-4 px-1">
    <div class="relative flex w-20 h-20 self-center justify-center items-center bg-gray-100 rounded-full">
        <img src="{{$area->icon}}" alt="{{$area->alt}}" class="absolute w-full object-cover object-center" />
    </div>
    <h4 class="text-center">{{$area->name}}</h4>
</div>
@endforeach