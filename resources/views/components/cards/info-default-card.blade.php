@props(['title'=>null, 'subtitle' => null, 'abstract'=>null,'description', 'ratio' => null])
<div class="flex flex-col">
    @if($title)
    <h3>{{$title}}</h3>
    @else
    <strong class="title">{{$subtitle}}</strong>
    @endif
    <span class="flex flex-col break-words">
        <p class="font-bold">{{$abstract}}</p>
        <p>{{$description}}</p>
        <p>{{$ratio}}</p>
    </span>
</div>