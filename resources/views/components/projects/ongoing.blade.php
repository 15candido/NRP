<!-- card for ongoing project -->
@foreach($ongoingProjects as $project)
    <div class="flex w-full h-full justify-start items-center">
        <div class="flex flex-col w-full h-full bg-white rounded-lg shadow-md justify-center md:max-w-md">
            <a href="{{$project->url}}" class="pointer-events-none">
                <img src="{{$project->image}}" class="pointer-events-auto rounded-t-lg hover:opacity-75" alt="{{$project->alt}}">
            </a>
            <div class="w-full h-full space-y-4 p-4 rounded-lg hover:bg-gray-100">
                <a href="{{$project->url}}">
                    <h2 class="text-lg font-extrabold leading-normal text-[#264653] md:truncate 
                    hover:break-words">{{$project->name}}</h2>
                </a>
                <p class="text-base text-gray-600 break-words">{{$project->abstract}}</p>
                <x-buttons.button
                string="Saiba +"
                url="{{$project->url}}"
                />
            </div>
        </div>
    </div>
@endforeach

