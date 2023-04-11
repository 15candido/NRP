@props(['title'=>null, 'description'])
<article class="flex flex-col overflow-hidden">
    @if($title)
    <h2>{{ $title }}</h2>
    @endif
    <div class="flex flex-wrap">
        <p>{{ $description }}</p>
    </div>
</article>