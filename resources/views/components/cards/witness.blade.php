@props(['name', 'role'=>null, 'school'=>null, 'witness', 'src', 'alt'=>null])
<div class="flex flex-col gap-6 p-4 items-center bg-white rounded-lg shadow-md">
    <img class="rounded-full w-20 h-20 object-cover object-center bg-gray-400" src="{{$src}}" alt="{{$alt}}">
    <div class="flex flex-col justify-center space-y-1 text-center">
        <h4>{{$name}}</h4>
        <p class="font-bold">{{$role}}</p>
        @if($school)
        <p class="font-semibold">Escola: {{$school}}</p>
        @endif
        <p>{{$witness}}</p>
    </div>
    <x-buttons.button>Saiba + </x-buttons.button>
</div>