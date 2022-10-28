@foreach ($information as $info)
    <div class="card-impact">
        <h2>{{$info->value}}</h2>
        <p>{{$info->name}}</p>
    </div>
@endforeach
