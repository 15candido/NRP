@props(['title' => null, 'description' => null])
<div class="flex flex-col w-full h-auto gap-4 text-base leading-normal">
    @if($title)
        <h3>{{$title}}</h3>
    @endif
    <p>{{$description}}</p>
</div>