<!-- Ongoi projects Card -->
@foreach($projects as $project)
<article class="flex flex-col w-full h-full bg-white rounded-lg shadow-md justify-center md:max-w-md">
    <a href="#" class="pointer-events-none">
        <img src="{{$project->image}}" class="pointer-events-auto rounded-t-lg hover:opacity-75">
    </a>
    <div class="h-full p-4 rounded-lg hover:bg-gray-100 overflow-hidden">
        <a href="#" class="inline-block mb-0">
            <h4>{{$project->name}}</h4>
        </a>
        <p class="text-base text-gray-600 break-words">{{ $project->short_description }}</p>
        <x-buttons.button string="Saiba +" url="#" />
    </div>
</article>
@endforeach