@props(['title', 'description'])
<article class="flex flex-col overflow-hidden">
    <h2>{{$title}}</h2>
    <div class="flex flex-wrap">
        <p>{{ $description }}</p>
    </div>
</article>