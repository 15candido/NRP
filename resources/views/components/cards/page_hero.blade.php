@props(['pageName', 'image'])
<div class="relative flex w-full h-96 justify-center items-center data-block">
    <img src="{{$image}}" class="absolute w-full h-full object-cover object-center">
    <div class="absolute flex flex-col max-w-7xl font-bold text-white justify-center items-center space-y-4">
        <h2 class="bg-[#264653] p-4 bg-opacity-50">{{ $pageName }}</h2>
    </div>
</div>