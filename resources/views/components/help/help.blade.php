@foreach($help as $help)
@if($help->first_option == false)
<div class="flex flex-col w-full h-full rounded-lg shadow-md justify-start items-center gap-4 py-4 px-1">
    <div class="relative flex w-28 h-28 self-center justify-center items-center bg-gray-100 rounded-full">
        <img src="{{$help->icon}}" alt="{{$help->alt}}" class="absolute w-full object-cover object-center" />
    </div>
    <h2 class="text-lg font-extrabold text-center text-[#264653]">{{$help->name}}</h2>
</div>
@endif
@endforeach