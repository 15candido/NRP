<form action="" class="w-full space-y-4 ">
<!-- rounded-xl shadow-lg p-4 hover:shadow-xl -->
    <!-- <h2>Inscrever-me</h2> -->
    <div class="flex flex-col md:flex-row space-y-4 md:space-x-4 md:space-y-0">
        <div class="w-full space-y-2">
            <label for="" class="block font-bold">Nome</label>
            <input type="text" class="appearance-none block w-full bg-white ring-0 ring-gray-50 rounded-lg px-4 py-2 
            focus:outline-none focus:bg-white focus:ring-1 focus:ring-[#25caca]" placeholder="Nome">
        </div>
        <div class="w-full space-y-2">
            <label for="" class="block font-bold">Data de Nascimento</label>
            <input type="date" class="appearance-none block w-full bg-white ring-0 ring-gray-50 rounded-lg px-4 py-2 
            focus:outline-none focus:bg-white focus:ring-1 focus:ring-[#25caca]" placeholder="Data de Nascimento">
        </div>
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
        <label for="" class="block font-bold">Morada</label>
        <input type="text" class="appearance-none block w-full bg-white ring-0 ring-gray-50 rounded-lg px-4 py-2 
        focus:outline-none focus:bg-white focus:ring-1 focus:ring-[#25caca]" placeholder="Morada">
    </div>
    <div class="flex flex-col md:flex-row space-y-4 md:space-x-4 md:space-y-0">
        <div class="relative w-full space-y-2">
            <label for="" class="block font-bold">Localidade</label>
            <select class="block appearance-none w-full bg-white ring-0 ring-gray-50 rounded-lg px-4 py-2 
            focus:outline-none focus:bg-white focus:ring-1 focus:ring-[#25caca]">
                <option>Selecionar</option>
                <option>Aveiro</option>
                <option>Açores</option>
                <option>Beja</option>
                <option>Braga</option>
                <option>Bragança</option>
                <option>Castelo Branco</option>
                <option>Coimbra</option>
                <option>Évora</option>
                <option>Faro</option>
                <option>Guarda</option>
                <option>Leria</option>
                <option>Lisboa</option>
            </select>
        </div>
        <div class="w-full space-y-2">
            <label for="" class="block font-bold">Código Postal</label> 
            <input type="number" class="appearance-none block w-full bg-white ring-0 ring-gray-50 rounded-lg px-4 py-2 
            focus:outline-none focus:bg-white focus:ring-1 focus:ring-[#25caca]" placeholder="Código postal">
        </div>
    </div>
    <div class="w-full space-y-2">
        <label for="" class="block font-bold">Motivação</label> 
        <textarea name="" class="appearance-none block w-full bg-white ring-0 ring-gray-50 rounded-lg px-4 py-2 
        focus:outline-none focus:bg-white focus:ring-1 focus:ring-[#25caca]" id="" cols="30" rows="6" placeholder="De forma sucinta, 
        diga-nos as principais motivações para ser voluntario da Na Rota dos Povos">
        </textarea>
    </div>
    <div class="flex flex-col lg:flex-row gap-4 justify-center items-start text-xs">
        <div class="space-y-3">
            <h5 class="font-bold">Documento</h5>
            <div class="flex gap-4 justify-center items-center">
                <input type="checkbox" class=" w-3 h-3">
                <p>Recebi e tomei conhecimento do documento "ser voluntário da ONGD, Na Rota dos Povos"</p>
            </div>
        </div>
        <div class="space-y-3">
            <h5 class="font-bold">Dossier</h5>
            <div class="flex gap-4 justify-center items-center">
                <input type="checkbox" class=" w-3 h-3">
                <p>Recebi e tomei conhecimento do dossier "projeros da ONGD, Na Rota dos Povos"</p>
            </div>
        </div>
        <div class="space-y-3">
            <h5 class="font-bold">Consulta</h5>
            <div class="flex gap-4 justify-center items-center">
                <input type="checkbox" class=" w-3 h-3">
                <p>Já frequentei a consulta do viajante/ou fiz as vacinas obritórias</p>
            </div>
        </div>
    </div>
    <x-button.button>Submeter</x-button.button>
</form>
