<!-- help card -->
@foreach($howToHelp as $help)
    @if($help->first_option == true)
        <div class="flex w-full h-full justify-start items-center">
            <div class="flex flex-col w-full h-full bg-white rounded-lg shadow-md justify-center md:max-w-md">
                <a href="{{$help->url}}" class="pointer-events-none">
                    <img src="{{$help->image}}" class="pointer-events-auto rounded-t-lg hover:opacity-75">
                </a>
                <div class="w-full h-full space-y-4 p-4 rounded-lg hover:bg-gray-100">
                    <a href="{{$help->url}}">
                        <h2 class="text-lg font-extrabold leading-normal text-[#264653] md:truncate 
                        hover:break-words">{{$help->name}}</h2>
                    </a>
                    <p class="text-base text-gray-600 break-words">{{$help->description}}</p>
                    <x-buttons.button
                        string="Saiba +"
                        url="{{$help->url}}"
                    />
                </div>
            </div>
        </div>
    @endif
@endforeach

