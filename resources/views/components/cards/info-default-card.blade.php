@props(['title', 'subtitle' => null, 'description', 'ratio' => null])
<div class="flex flex-col w-full h-full gap-4 text-base leading-normal">
    <h3 class="font-extrabold text-2xl md:text-3xl text-left">{{$title}}</h3>
    <span class="space-y-4">
        <h3 class="font-bold">{{$subtitle}}</h3>
        <p>{{$description}}</p>
        <p>{{$ratio}}</p>
    </span>
</div>