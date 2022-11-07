@foreach($howToHelp as $help)
    @if($help->first_option == true)
        <div class="flex w-full justify-start items-center">
            <div class="flex flex-col w-full bg-white rounded-lg shadow-lg justify-start md:max-w-md
            hover:bg-gray-100">
                <div class="space-y-4 p-4">
                    <h2 class="text-lg font-extrabold leading-normal md:truncate hover:break-words">{{$help->name}}</h2>
                    <p class="text-base text-gray-600 break-all">{{$help->description}}</p>
                </div>
            </div>
        </div>
    @endif
@endforeach