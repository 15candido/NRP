@foreach ($impacts as $impact)
    <div class="flex flex-col w-full  space-y-4 p-6 justify-center items-center text-center rounded-lg shadow-md">
        <h2 class="text-3xl font-extrabold text-cyan-600">{{$impact->value}}</h2>
        <p class="font-bold">{{$impact->description}}</p>
    </div>
@endforeach
