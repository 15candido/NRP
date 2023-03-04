<form action="" class="w-full space-y-6 pb-4">
    <div class="w-full space-y-2">
        <label for="">Nome</label>
        <input type="text" class="appearance-none block w-full bg-white ring-0 ring-gray-50 rounded-lg px-4 py-2 
        focus:outline-none focus:bg-white focus:ring-1 focus:ring-[#25caca] placeholder:text-gray-400" placeholder="Nome">
    </div>
    <div class="flex flex-col md:flex-row space-y-4 md:space-x-4 md:space-y-0">
        <div class="w-full space-y-2">
            <label for="">Telefone</label>
            <input type="tel" class="appearance-none block w-full bg-white ring-0 ring-gray-50 rounded-lg px-4 py-2 
            focus:outline-none focus:bg-white focus:ring-1 focus:ring-[#25caca] placeholder:text-gray-400" placeholder="Telefone">
        </div>
        <div class="w-full space-y-2">
            <label for="">Email</label>
            <input type="text" class="appearance-none block w-full bg-white ring-0 ring-gray-50 rounded-lg px-4 py-2 
            focus:outline-none focus:bg-white focus:ring-1 focus:ring-[#25caca] placeholder:text-gray-400" placeholder="Email">
        </div>
    </div>
    <div class="w-full space-y-2">
        <label for="">IBAN</label>
        <input type="text" class="appearance-none block w-full bg-white ring-0 ring-gray-50 rounded-lg px-4 py-2 
        focus:outline-none focus:bg-white focus:ring-1 focus:ring-[#25caca] placeholder:text-gray-400" placeholder="IBAN">
    </div>
    <div class="flex flex-col md:flex-row space-y-4 md:space-x-4 md:space-y-0">
        <div class="w-full space-y-2">
            <label for="">Banco</label>
            <input type="text" class="appearance-none block w-full bg-white ring-0 ring-gray-50 rounded-lg px-4 py-2 
            focus:outline-none focus:bg-white focus:ring-1 focus:ring-[#25caca] placeholder:text-gray-400" placeholder="Banco">
        </div>
        <div class="w-full space-y-2">
            <label for="">BIC SWIFT</label>
            <input type="text" class="appearance-none block w-full bg-white ring-0 ring-gray-50 rounded-lg px-4 py-2 
            focus:outline-none focus:bg-white focus:ring-1 focus:ring-[#25caca] placeholder:text-gray-400" placeholder="BIC SWIFT">
        </div>
    </div>
    <div class="flex flex-col gap-4">
        <strong>Dados para emissão do recibo (dedutível ao abrigo do EBF)</strong>
        <div class="flex flex-col md:flex-row space-y-4 md:space-x-4 md:space-y-0">
            <div class="w-full space-y-2">
                <label for="">Morada</label>
                <input type="text" class="appearance-none block w-full bg-white ring-0 ring-gray-50 rounded-lg px-4 py-2 
                focus:outline-none focus:bg-white focus:ring-1 focus:ring-[#25caca] placeholder:text-gray-400" placeholder="Morada">
            </div>
            <div class="w-full space-y-2">
                <label for="">NIF</label>
                <input type="number" class="appearance-none block w-full bg-white ring-0 ring-gray-50 rounded-lg px-4 py-2 
                focus:outline-none focus:bg-white focus:ring-1 focus:ring-[#25caca] placeholder:text-gray-400" placeholder="NIF">
            </div>
        </div>
    </div>
    <div class="space-y-3 text-sm">
        <strong class="">Política de privacidade</strong>
        <div class="flex gap-4 items-center">
            <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500">
            <em>Declaro que aceito e concordo com a
                <a href="#" class="text-[#4ca747] list-inside"> política de privacidade</a>
                da "Na Rota dos Povos".
            </em>
        </div>
    </div>
    <x-buttons.button>Submeter</x-buttons.button>
    <div class="flex flex-col gap-4 text-sm">
        <p>Em alternativa, faça download da ficha de inscrição <a href="#" class="text-[#4ca747]"> "Ser Firquidja da Na Rota dos
                Povos" </a>, encaminhando-a depois para o nosso email <em class="text-[#1368aa]"> ongd@narotadospovos.org</em>
        </p>
    </div>
</form>