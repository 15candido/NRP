<h1>Necessidades</h1>
@foreach ($projects as $project)
    @if (!$project->needs->isEmpty())
        <h2>{{ $project->name }}</h2>
        @foreach ($project->needs as $need)
            <div class="flex">
                <div>{{ $need->name }}</div>
                <div>{{ $need->quantity }}</div>
            </div>
        @endforeach
    @endif
@endforeach