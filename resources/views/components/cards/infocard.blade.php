@props(['title', 'description'])
<div class="flex flex-col w-full h-auto gap-4 text-base leading-normal">
    <h3 class="text-lg md:text-xl lg:text-2xl font-black text-[#264653]">{{$title}}</h3>
    <p>{{$description}}</p>
</div>