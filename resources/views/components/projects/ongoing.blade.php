<!-- card for ongoing project -->
@foreach($ongoingProjects as $project)
    <div class="flex w-full h-full justify-start items-center">
        <div class="flex flex-col w-full h-full bg-white rounded-lg shadow-md justify-center md:max-w-md
         hover:bg-gray-100">
            <a href="#">
                <img src="{{$project->image}}" class="rounded-t-lg" alt="{{$project->alt}}">
            </a>
            <div class="space-y-4 p-4">
                <h2 class="text-lg font-extrabold leading-normal md:truncate hover:break-words">{{$project->name}}</h2>
                <p class="text-base text-gray-600 break-all">{{$project->abstract}}</p>
                <x-button.button>Saber +</x-button.button>
            </div>
        </div>
    </div>
@endforeach

