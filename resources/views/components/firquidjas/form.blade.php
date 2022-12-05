<form action="" class="w-full space-y-4 pb-4 ">
    <div class="w-full space-y-2">
        <label for="" class="block font-bold">Nome</label>
        <input type="text" class="appearance-none block w-full bg-white ring-0 ring-gray-50 rounded-lg px-4 py-2 
        focus:outline-none focus:bg-white focus:ring-1 focus:ring-[#25caca]" placeholder="Nome">
    </div>
    <div class="flex flex-col md:flex-row space-y-4 md:space-x-4 md:space-y-0">
        <div class="w-full space-y-2">
            <label for="" class="block font-bold">Telefone</label>
            <input type="tel" class="appearance-none block w-full bg-white ring-0 ring-gray-50 rounded-lg px-4 py-2 
            focus:outline-none focus:bg-white focus:ring-1 focus:ring-[#25caca]" placeholder="Telefone">
        </div>
        <div class="w-full space-y-2">
            <label for="" class="block font-bold">Email</label>
            <input type="text" class="appearance-none block w-full bg-white ring-0 ring-gray-50 rounded-lg px-4 py-2 
            focus:outline-none focus:bg-white focus:ring-1 focus:ring-[#25caca]" placeholder="Email">
        </div>
    </div>
    <div class="w-full space-y-2">
        <label for="" class="block font-bold">IBAN</label>
        <input type="text" class="appearance-none block w-full bg-white ring-0 ring-gray-50 rounded-lg px-4 py-2 
        focus:outline-none focus:bg-white focus:ring-1 focus:ring-[#25caca]" placeholder="IBAN">
    </div>
    <div class="flex flex-col md:flex-row space-y-4 md:space-x-4 md:space-y-0">
        <div class="w-full space-y-2">
            <label for="" class="block font-bold">Banco</label>
            <input type="text" class="appearance-none block w-full bg-white ring-0 ring-gray-50 rounded-lg px-4 py-2 
            focus:outline-none focus:bg-white focus:ring-1 focus:ring-[#25caca]" placeholder="Banco">
        </div>
        <div class="w-full space-y-2">
            <label for="" class="block font-bold">BIC SWIFT</label>
            <input type="text" class="appearance-none block w-full bg-white ring-0 ring-gray-50 rounded-lg px-4 py-2 
            focus:outline-none focus:bg-white focus:ring-1 focus:ring-[#25caca]" placeholder="BIC SWIFT">
        </div>
    </div>
    <div class="flex flex-col gap-4">
        <h5 class="font-bold text-sm">Dados para emissão do recibo (dedutível ao abrigo do EBF)</h5>
        <div class="flex flex-col md:flex-row space-y-4 md:space-x-4 md:space-y-0">
            <div class="w-full space-y-2">
                <label for="" class="block font-bold">Morada</label>
                <input type="text" class="appearance-none block w-full bg-white ring-0 ring-gray-50 rounded-lg px-4 py-2 
                focus:outline-none focus:bg-white focus:ring-1 focus:ring-[#25caca]" placeholder="Morada">
            </div>
            <div class="w-full space-y-2">
                <label for="" class="block font-bold">NIF</label>
                <input type="number" class="appearance-none block w-full bg-white ring-0 ring-gray-50 rounded-lg px-4 py-2 
                focus:outline-none focus:bg-white focus:ring-1 focus:ring-[#25caca]" placeholder="NIF">
            </div>
        </div>
    </div>
    <div class="space-y-3 text-sm">
        <h5 class="font-bold">Política de privacidade</h5>
        <div class="flex gap-2 items-center">
            <input type="checkbox" class=" w-3 h-3">
            <p>Declaro que aceito e concordo com a <a href="#" class="text-[#4ca747] list-inside"> política de privacidade</a>
            de Na Rota dos Povos.</p>
        </div>
    </div>
    <x-buttons.button>Submeter</x-buttons.button>
    <div class="flex flex-col gap-4 text-sm">
       <p>Em alternativa, faça download da ficha de inscrição <a href="#" class="text-[#4ca747]"> "Ser Firquidja da Na Rota dos
        Povos" </a>, encaminhando-a depois para o nosso email <span class="text-[#1368aa]"> ongd@narotadospovos.org</span></p>
    </div>
</form>
