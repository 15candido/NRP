@props(['title', 'src', 'alt', 'abstract'])
<div class="flex flex-col mx-0 p-0 items-center border-x-[1px] border-x-gray-600">
    <div class="flex w-full h-auto gap-6 px-4 py-1 border-x-4  border-x-gray-600">
        <h3>{{$title}}</h3>
    </div>
    <div class="flex flex-col gap-6 px-4 items-center">
        <img src="{{$src}}" alt="{{$alt}}">
        <p>{{$abstract}}</p>
    </div>
</div>