@props(['size' => 'normal', 'user' => null])

<div class="p-4 border rounded max-w-sm shadow hover:bg-green-50">
    <div>{{ $user->name }}</div>
    <div>{{ $user->email }}</div>    
    @foreach ($user->roles as $role)
        <div>Role: {{ $role->name }}</div>        
        <div>Abilities:</div>
        @foreach ($user->abilities() as $ability)
            <div>{{ $ability }}</div>            
        @endforeach
    @endforeach    
</div>
