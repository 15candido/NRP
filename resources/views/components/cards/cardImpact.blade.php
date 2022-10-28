@foreach ($information as $info)
    <x-cards.cardStructure>
        <div class="card-impact">
            
            <h2>{{$info->value}}</h2>
            <p>{{$info->name}}</p>
        </div>
    </x-cards.cardStructure>
@endforeach
