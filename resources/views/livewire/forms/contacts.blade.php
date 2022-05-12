<div>
    @if ($show)
    <div>
        Formulário
        <div>
            <div>
                <div>Nome: <input class="border p-2" type="text" name="name" wire:model="name"/></div>
                @error('name')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>

            <div>Email: <input class="border p-2" type="text" name="email" wire:model="email"/></div>
                @error('email')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            <div>
                <textarea class="border bg-green-50" name="form_content" wire:model="form_content"></textarea>
                @error('form_content')
                    <div>{{ $message }}</div>
                @enderror
            </div>
            <button wire:click="send_contact_form()" class="bg-green-500 hover:bg-green-600 text-white p-2 border">Enviar</button>
        </div>
    </div>
    @else
        <div>Muito obrigado pela sua mensagem.</div>
        <button wire:click="$set('show',true)">Quer enviar outra mensagem?</button>
    @endif
</div>
