@foreach($help as $help)
@if($help->first_option == false)
<div class="flex flex-col w-full h-full rounded-lg shadow-md justify-start items-center gap-4 py-4 px-4">
    <div class="relative flex w-28 h-28 self-center justify-center items-center bg-gray-100 rounded-full overflow-hidden">
        <img src="{{$help->icon}}" alt="{{$help->alt}}" class="absolute object-cover object-center" />
    </div>
    <h4 class="text-center">{{$help->name}}</h4>
</div>
@endif
@endforeach