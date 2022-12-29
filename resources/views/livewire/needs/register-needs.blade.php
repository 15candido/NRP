<div class="relative flex flex-wrap w-full  bg-gray-200 p-4 justify-center items-center overflow-hidden shadow-sm 
sm:rounded-lg sm:w-11/12 md:w-10/12 lg:w-9/12 xl:w-8/12 transition-all duration-300">

    {{-- Main Section --}}
    <div class="relative flex flex-wrap  w-full px-10 py-12 overflow-hidden  bg-white">
        
        {{-- Top Mask  --}}
        <div class="absolute up-shape z-0 w-40 h-40  bg-gradient-to-r from-[#287271]  to-[#264653] rounded-full 
        -right-28 -top-28"></div>

        {{-- Conten Section --}}
        <div class="w-full space-y-20">
            
            {{-- Header Section --}}
            <div class="flex flex-wrap justify-between items-center">
                {{--Title --}}
                <h5 class="text-xs font-medium text-gray-500 pb-2 border-b-[1px] border-b-gray-500 uppercase sm:text-sm sm:font-semibold
                sm:text-gray-600 sm:border-b-2 sm:border-b-gray-600 md:text-lg md:font-bold md:text-gray-700 md:border-b-4
                md:border-gray-700 lg:text-3xl lg:font-extrabold transition-all duration-300">{{ $need->title }}</h5>

                {{-- Logo --}}
                <span class="w-7 h-7 hidden sm:inline-block transition-all duration-300">
                    <img src="img/logo_rota.png" class="object-cover object-center w-full h-full" alt="Logótipo da Na Rota dos Povos">
                </span>
            </div>

            {{-- Body Section --}}
            <div class="flex flex-wrap space-y-8 justify-between items-center overflow-hidden">

                {{-- Need --}}
                <div class="hidden w-full sm:flex sm:flex-wrap sm:justify-between overflow-hidden">

                    {{-- Data of the Need --}}
                    <div class="flex flex-col  text-base text-gray-400 space-y-2 justify-center">
                        <!-- <h4 class="uppercase">TÍTULO: {{ $need->title }}</h4> -->
                        <p><strong>Necessidade# :</strong> {{ $need->id }}</p>
                        <p><strong>Data :</strong> {{ $need->created_at }}</p>
                        <p><strong>Data Limite :</strong> {{ $need->deadline }}</p>
                    </div>

                    {{-- Get The Project That Owns The Need --}}
                    <div class="flex flex-col space-y-2 items-start">
                        <h4 class="text-base text-gray-400">Projeto Assoc.</h4>
                        <p class=" text-gray-400">
                            {{ $need->project->name }}
                        </p>
                    </div>
                </div>
                
                {{-- Table, Need Items --}}
                <div class="relative w-full overflow-x-auto overflow-y-hidden">
                    <table class="table-auto w-full text-sm text-left">
                        <thead class="text-xs uppercase">
                            <tr class="whitespace-nowrap  bg-gray-100">
                                <th scope="col" class="py-5 px-6">
                                    Descrição
                                </th>
                                <th scope="col" class="py-5 px-6">
                                    Quantidade
                                </th>
                                <th scope="col" class="py-5 px-6">
                                    Observação
                                </th>
                                <th scope="col" class="py-5 px-6">
                                    Ação
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($itemsOfNeed as $item)
                                <tr class="hover:bg-gray-50">
                                    <td class="py-4 px-6">
                                        {{$item->description}}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{$item->qtd}}
                                    </td>
                                    <td class="py-4 px-6">
                                        {{ $item->obs }}
                                    </td>
                                    {{-- Actions Buttons--}}
                                    <td class="flex gap-2 py-4 px-6 justify-center items-center">

                                        {{-- Edit Button --}}

                                        <a href="#" class="p-2 rounded-lg shadow bg-yellow-400 bg-opacity-50">Editar</a>
                                        
                                        {{-- Delete Button --}}
                                        <a href="#" class="p-2 rounded-lg shadow bg-red-400 bg-opacity-50">Eliminar</a>
                                        
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            {{-- Footer Section --}}
            <div class="hidden w-full font-extralight sm:flex sm:justify-between sm:gap-8 sm:px-4 overflow-hidden">
                
                {{-- Total Items  --}}
                <div class="flex space-x-2 w-full justify-start">
                    <h4 class="text-base text-gray-400">Total :</h4>
                    <p>{{ $itemsOfNeed->count() }}</p>
                </div>

                {{-- Pagination --}}
                <div class="flex flex-col space-y-2">
                    <ul class="inline-flex items-center -space-x-px">
                        <li>
                        <a href="#" class="block px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                            <span class="sr-only">Previous</span>
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                        </a>
                        </li>
                        <li>
                        <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                        </li>
                        <li>
                        <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                        </li>
                        <li>
                        <a href="#" aria-current="page" class="z-10 px-3 py-2 leading-tight text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                        </li>
                        <li>
                        <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                        </li>
                        <li>
                        <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                        </li>
                        <li>
                        <a href="#" class="block px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                            <span class="sr-only">Next</span>
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                        </a>
                        </li>
                    </ul>
                </div>
            </div>
            
            {{-- Context --}}
            <div class="flex flex-col px-4 space-y-2">
                    <h4 class="text-base text-gray-400">Contexto</h4>
                    <p>{{ $need->context }}</p>
            </div>
        </div>

        {{-- Botton Mask  --}}
        <div class="absolute z-0 w-40 h-40  bg-gradient-to-r from-[#264653]  to-[#287271] rounded-full 
        -left-28 -bottom-28"></div>
    </div>

</div>


