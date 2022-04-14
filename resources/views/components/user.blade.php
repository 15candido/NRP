@props(['size' => 'normal', 'user' => null])

@if ($user)
    @if ($size == 'normal')
        <div class="p-4 border rounded max-w-sm shadow hover:bg-green-50">
            <div>{{ $user->name }}</div>
            <div>{{ $user->email }}</div>
        </div>
    @elseif ($size == 'big')
        <div class="font-bold bg-green-300 text-white p-4 border rounded max-w-sm shadow hover:bg-green-50">
            <div class="text-4xl">{{ $user->name }}</div>
            <div class="text-2xl">{{ $user->email }}</div>
        </div>
    @endif
@else
    <div>Não sei o que me estás a pedir</div>
@endif