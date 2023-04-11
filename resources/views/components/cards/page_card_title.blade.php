@props(['title', 'description'])
<article class="flex flex-col overflow-hidden">
    <h4>{{$title}}</h4>
    <div class="flex flex-wrap">
        <p>{{ $description }}</p>
    </div>
</article>