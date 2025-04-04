<div>
    @section('topbar')
    <livewire:layout.topbar />
    @endsection

    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto relative mt-20">
        <div class="w-full items-center justify-between mx-auto relative rounded-md p-6 bg-[#649dad]">
            <div class="flex w-[60%]">
                <div class="flex-1 justify-start w-[40%] mb-8">
                    <div class="relative flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="absolute w-5 h-5 top-2.5 left-2.5 text-slate-600">
                            <path fill-rule="evenodd" d="M10.5 3.75a6.75 6.75 0 1 0 0 13.5 6.75 6.75 0 0 0 0-13.5ZM2.25 10.5a8.25 8.25 0 1 1 14.59 5.28l4.69 4.69a.75.75 0 1 1-1.06 1.06l-4.69-4.69A8.25 8.25 0 0 1 2.25 10.5Z" clip-rule="evenodd" />
                        </svg>
                        <input class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md pl-10 pr-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow" placeholder="Pesquisar música" wire:model.live='pesquisar_musica' />
                    </div>
                </div>
                <div class="pl-3">
                    <button class="px-3 py-2 text-sm font-medium text-white bg-slate-600 border rounded-md hover:bg-slate-500" wire:click='criarMusica'>
                        Adicionar Música
                    </button>
                </div>
            </div>

            <div>
                <table class="w-full table-auto border-collapse">
                    <thead>
                        <tr>
                            <th class="px-4 py-3 text-left">#</th>
                            <th class="px-4 py-3 text-left">Título</th>

                            <th class="px-4 py-3 text-left">Gênero</th>
                            <th class="py-3">Preço</th>
                            <th class="px-4 py-3 text-center">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($musicas as $musica)
                        <tr class="border-b border-gray-200">
                            <td class="px-4 py-3 font-semibold">{{ $musica->id }}</td>
                            <td class="px-4 py-3 font-semibold">{{ $musica->title }}</td>

                            <td class="px-4 py-3 font-semibold">{{ $musica->genero }}</td>
                            <td class="py-3 text-center">
                                {{ $musica->price ? 'R$ ' . number_format($musica->price, 2, ',', '.') : 'Gratuito' }}
                            </td>
                            <td class="flex px-4 py-3 text-right items-center justify-end space-x-2">
                                
                                <button class="px-3 py-1 text-sm font-bold text-blue-500 bg-transparent border border-blue-500 rounded-md hover:bg-blue-500 hover:text-white" wire:click='editarMusica'>Editar</button>
                               @if ($modal)
                               <livewire:pagina.artista.componente.FormEditMusic :musicaId="$musica->id"  >
                               @endif


                                <button class="px-4 py-2 text-sm font-semibold text-white bg-red-600 hover:bg-red-700 rounded ml-2" onclick="confirm('Are you sure you want to delete this music?') || event.stopImmediatePropagation()" wire:click="deleteMusica({{ $musica->id }})">
                                    Delete
                                </button>
                                <button class="px-4 py-2 text-sm font-semibold text-white {{ $musica->active ? 'bg-red-500 hover:bg-red-600' : 'bg-green-500 hover:bg-green-600' }} rounded" wire:click="toggleActive({{ $musica->id }})">
                                    {{ $musica->active ? 'Deactivate' : 'Activate' }}
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>