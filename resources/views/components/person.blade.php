@props(['person'])
<div class="border p-4 rounded">
    <div class="flex">
        <img class="rounded-full" src="https://www.gravatar.com/avatar/205e460b479e2e5b48aec07710c08d50" />
        <div class="flex h-8 mx-2">
            <div class="border mx-0.5 px-1 py-0.5 rounded text-white bg-green-400">Saúde</div>
            <div class="border mx-0.5 px-1 py-0.5 rounded text-white bg-green-400">Informática</div>
            <div class="border mx-0.5 px-1 py-0.5 rounded text-white bg-green-400">Firquidja</div>
        </div>
    </div>
    <div class="font-bold">{{ $person->name }}</div>
    <div>{{ $person->email }}</div>
    @if ($person->description)
        <div>
            <div class="max-h-12 overflow-hidden">
                {{ $person->description }}
            </div>
            <div><a href="/people/{{ $person->slug }}">ver mais</a></div>
        </div>
    @endif
    <div class="flex h-8">
        @if ($person->facebook)
            <a href="{{ $person->facebook }}"><img class="h-12 hover:opacity-75" src="img/icons/facebook.svg"></a>
        @endif
        @if ($person->instagram)
            <a href="{{ $person->instagram }}"><img class="h-12 hover:opacity-75" src="img/icons/instagram.svg"></a>
        @endif
    </div>
</div>