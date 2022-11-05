@foreach($howToHelp as $help)
    <div class="flex w-full justify-center items-center">
        <div class="flex flex-col w-full bg-white rounded-lg shadow-lg justify-center md:max-w-md hover:bg-gray-200">
            <div class="space-y-4 p-4">
                <h2 class="text-lg font-extrabold leading-normal md:truncate hover:break-words">{{$help->name}}</h2>
                <p class="text-base text-gray-600 break-all">{{$help->description}}</p>
            </div>
        </div>
    </div>
@endforeach