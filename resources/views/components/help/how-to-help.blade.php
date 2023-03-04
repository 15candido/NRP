<!-- help card -->
@foreach($howToHelp as $help)
@if($help->first_option == true)
<div class="flex w-full h-full justify-start items-center">
    <article class="flex flex-col w-full h-full bg-white rounded-lg shadow-md justify-center 
    md:max-w-md p-4 gap-4  hover:bg-gray-100">
        <header class="w-full h-full space-y-4 rounded-lg">
            <a href="{{$help->url}}">
                <h4 class="md:truncate hover:break-words">
                    {{$help->name}}
                </h4>
            </a>
            <p class="text-base text-gray-600 break-words">{{$help->description}}</p>
        </header>
        <figure>
            <a href="{{$help->url}}" class="pointer-events-none">
                <img src="{{$help->image}}" class="pointer-events-auto rounded-t-lg hover:opacity-75">
            </a>
        </figure>
        <footer>
            <x-buttons.button string="Saiba +" url="{{$help->url}}" />
        </footer>
    </article>
</div>
@endif
@endforeach