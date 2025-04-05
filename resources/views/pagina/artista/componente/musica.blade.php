<div class=" flex-col items-center bg-white border border-gray-200 rounded-lg shadow-sm md:flex-row md:w-full justify-around hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
    <div class="flex-col items-center bg-white border border-gray-200 rounded-lg shadow-sm md:flex-row md:w-full justify-around hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
        @foreach ($musicas as $musica)
        <div class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow-sm md:flex-row md:w-full justify-around hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <div class="flex flex-col justify-between w-1/4">
                <img src="{{ asset('storage/' . $musica->file_photo) }}" alt="{{ $musica->title }}" class="w-16 h-16 my-auto mx-auto rounded-lg shadow-lg shadow-black">
                <div>
                    <h2 class="text-xl font-semibold text-center">{{ $musica->title }}</h2>
                    <p class="text-gray-600 text-sm text-center">{{ $musica->genero }}</p>
                </div>
            </div>

            <div class="flex justify-center items-center">
                <!-- Botões de controle -->
                <button class="p-3 rounded-full bg-[#85b2bf] shadow shadow-black focus:outline-none">
                    ▶️
                </button>
                <button class="p-4 rounded-full bg-[#85b2bf] shadow shadow-black focus:outline-none mx-4">
                    ⏸️
                </button>
                <button class="p-3 rounded-full bg-[#85b2bf] shadow shadow-black focus:outline-none">
                    ⏭️
                </button>
            </div>

            <div class="flex flex-col w-72 justify-between p-4 leading-normal">
                <div class="mt-6 h-2 rounded-full w-full">
                    <div class="bg-teal-500 h-2 rounded-full w-full"></div>
                </div>
                <div class="flex justify-between mt-2 text-sm text-gray-600">
                    <span>0:00</span>
                    <span>3:53</span>
                </div>
            </div>

            <div class="relative inline-block text-left">
                <button type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" wire:click="abrirModalComentarios">
                    Ver Comentários
                    <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        </div>
        @endforeach

    </div>

    @if ($mostrarModal)
    <div class="fixed z-10 inset-0 overflow-y-auto">
        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        Comentários
                    </h3>
                    <div class="mt-2">
                        <p class="text-sm text-gray-500">
                            Aqui estão os comentários:
                        </p>
                        <div id="commentList">
                            <div class="flex items-center">
                                <p>Comentário 1</p>
                                <div class="ml-2 flex">
                                    @for ($i = 0; $i < 5; $i++) <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 15l-5.878 3.09 1.123-6.505L.27 7.26l6.54-1.01L10 0l3.193 6.25 6.54 1.01-4.973 4.325 1.122 6.505z" /></svg>
                                        @endfor
                                </div>
                            </div>
                            <div class="flex items-center">
                                <p>Comentário 2</p>
                                <div class="ml-2 flex">
                                    @for ($i = 0; $i < 4; $i++) <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 15l-5.878 3.09 1.123-6.505L.27 7.26l6.54-1.01L10 0l3.193 6.25 6.54 1.01-4.973 4.325 1.122 6.505z" /></svg>
                                        @endfor
                                        @for ($i = 0; $i < 1; $i++) <svg class="w-4 h-4 text-gray-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 15l-5.878 3.09 1.123-6.505L.27 7.26l6.54-1.01L10 0l3.193 6.25 6.54 1.01-4.973 4.325 1.122 6.505z" /></svg>
                                            @endfor
                                </div>
                            </div>
                            <div class="flex items-center">
                                <p>Comentário 3</p>
                                <div class="ml-2 flex">
                                    @for ($i = 0; $i < 3; $i++) <svg class="w-4 h-4 text-yellow-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 15l-5.878 3.09 1.123-6.505L.27 7.26l6.54-1.01L10 0l3.193 6.25 6.54 1.01-4.973 4.325 1.122 6.505z" /></svg>
                                        @endfor
                                        @for ($i = 0; $i < 2; $i++) <svg class="w-4 h-4 text-gray-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10 15l-5.878 3.09 1.123-6.505L.27 7.26l6.54-1.01L10 0l3.193 6.25 6.54 1.01-4.973 4.325 1.122 6.505z" /></svg>
                                            @endfor
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                    <button wire:click="$set('mostrarModal', false)" type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                        Fechar
                    </button>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
