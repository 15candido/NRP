@props(['title', 'paragraph'])
<div class="flex flex-col overflow-hidden">
    <h3>{{ $title }}</h3>
    <p class="flex flex-col break-words"> {{$paragraph}} </p>
</div>