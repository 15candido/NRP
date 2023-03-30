@props(['title'=>null, 'subtitle' => null, 'abstract'=>null,'description', 'ratio' => null])
<div class="flex flex-col w-full h-full">
    @if($title)
    <h2>{{$title}}</h2>
    @else
    <h3>{{$subtitle}}</h3>
    @endif
    <span class="flex flex-col break-words">
        <p class="font-bold">{{$abstract}}</p>
        <p>{{$description}}</p>
        <p>{{$ratio}}</p>
    </span>
</div>