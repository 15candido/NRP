<div class="grid grid-cols-3 gap-4">
    @foreach ($information as $info)
        <div class="border p-4 rounded">
            <div class="text-2xl text-blue-500 font-bold">{{$info->name}}</div>
            <div>{{$info->value}}</div>
        </div>
    @endforeach
</div>