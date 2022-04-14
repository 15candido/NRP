<x-guestLayout>
    <div class="text-4xl">Quem somos</div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3 max-w-5xl m-auto">
        @foreach ($users as $user)
            <x-user :user="$user"/>
        @endforeach
    </div>
    <div>
        {{ $users->links() }}
    </div>
</x-guestLayout>