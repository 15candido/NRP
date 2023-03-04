@props(['title' => null, 'description' => null])
<div class="flex flex-col">
    @if($title)
    <h4>{{$title}}</h4>
    @endif
    <p>{{$description}}</p>
</div>