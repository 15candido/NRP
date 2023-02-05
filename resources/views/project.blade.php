<x-guestLayout>
    {{-- Page title --}}
    <x-slot name="title">
        {{ $project->name }}
    </x-slot>
    <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Ratione culpa nesciunt aperiam placeat maiores saepe modi sapiente?
        Fugiat ut qui iste, nemo eligendi cupiditate consequuntur blanditiis
        veritatis in sequi eius?
        <img src="{{ $project->image}}" alt="tag">

    </p>
</x-guestLayout>