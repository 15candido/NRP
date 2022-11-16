@props(['name', 'role', 'school', 'witness', 'src', 'alt'])
<div class="flex flex-col gap-6 p-4 items-center bg-white rounded-lg shadow-md">
    <img  class="rounded-full w-20 h-20 object-cover object-center bg-gray-400" src="{{$src}}" alt="{{$alt}}">
    <div class="flex flex-col justify-center text-center">
        <h4>{{$name}}</h4>
        <p class="font-bold">{{$role}}</p>
        <p class="font-semibold">Escola: {{$school}}</p>
        <p>{{$witness}}</p>
    </div>
    <x-button.button>Saiba + </x-button.button>
</div>