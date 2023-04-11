@props(['note', 'year', 'image'])
<div class="flex flex-col mx-0 p-0 items-center border-x-[1px] border-solid border-x-gray-600">
    <div class="flex w-full h-auto px-4 border-x-4 border-solid border-x-gray-600">
        <strong class="title">{{$year}}</strong>
    </div>
    <div class="flex flex-col space-y-4 px-4 items-center">
        <img src="{{asset($image)}}">
        <p>{{$note}}</p>
    </div>
</div>