@props(['size' => 'normal', 'user' => null])

<div class="p-4 border rounded max-w-sm shadow hover:bg-green-50">
    <div>{{ $user->name }}</div>
    <div>{{ $user->email }}</div>
    @if ($user->role)
        <div>{{ $user->role->name }}</div>
    @endif
</div>
