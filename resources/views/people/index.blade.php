<x-guestLayout>

    <div class="grid grid-cols-3 gap-2">
        @foreach ($people as $person)
            <x-person :person="$person"/>
        @endforeach
    </div>

</x-guestLayout>