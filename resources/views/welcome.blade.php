<x-guestLayout>
    <x-hero/>
    <div class="font-body">
    Na Rota dos Povos
    @php
        $user = \App\Models\User::find(1);
    @endphp
    <x-user size="big" :user="$user"/>
    @for($i=0; $i<100;$i++)
        <div class="font-sans">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, porro alias dolore illum doloremque molestiae mollitia molestias, sit dolores assumenda numquam asperiores ullam! Dolor quo architecto vel enim. Qui, autem.</div>
        <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati sapiente iste aperiam pariatur magni, impedit deleniti officia libero saepe reiciendis dignissimos aspernatur, sint recusandae possimus autem atque accusamus. Eius, doloremque.</div>
        <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste commodi voluptatum accusamus, reiciendis optio animi veritatis, sit nemo repellat, quis sunt? Fugiat officiis porro ratione in ullam quisquam beatae esse.</div>
    @endfor
    </div>
</x-guestLayout>