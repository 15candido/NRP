<x-guestLayout>
    @if (Auth::user())
        O utilizador está autenticado. Pode ficar a saber que ...
    @endif

    Aqui todos vêm isso.

</x-guestLayout>