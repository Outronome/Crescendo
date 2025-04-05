<div>
    @section('topbar')
    <livewire:Layout.Topbar />
    @endsection
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto relative mt-20 ">
        @if ($modal_atribuicao_utilizadores != true)
        {{--<!--<livewire:Paginas.Utilizadores.Componente.ModalAtribuicaoUtilizadores :utilizador_id="3" :role_id="$role_id"/>-->--}}
        @endif
        <div class="w-full  items-center justify-between mx-auto relative rounded-md  p-6 bg-[#649dad]">
            <div class="flex w-[60%]">
                <div class="flex-1 justify-start w-[40%] mb-8">
                    <div class="relative flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="absolute w-5 h-5 top-2.5 left-2.5 text-slate-600">
                            <path fill-rule="evenodd"
                                d="M10.5 3.75a6.75 6.75 0 1 0 0 13.5 6.75 6.75 0 0 0 0-13.5ZM2.25 10.5a8.25 8.25 0 1 1 14.59 5.28l4.69 4.69a.75.75 0 1 1-1.06 1.06l-4.69-4.69A8.25 8.25 0 0 1 2.25 10.5Z"
                                clip-rule="evenodd" />
                        </svg>
                        <input
                            class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md pl-10 pr-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                            placeholder="Pesquisar utilizador" wire:model.live='pesquisar_utilizador' />
                    </div>
                </div>
                <div class="pl-3">
                    <button
                        class="px-3 py-2 text-sm font-medium text-white bg-slate-600 border rounded-md hover:bg-slate-500"
                        wire:click='criarAdmin'>
                        Criar administrador
                    </button>
                </div>
            </div>

            <div>
                <table class="w-full table-auto border-collapse">
                    <thead>
                        <tr>
                            <th class="px-4 py-3 text-left">#</th>
                            <th class="px-4 py-3 text-left">Nome</th>
                            <th class="px-4 py-3 text-left">Email</th>
                            <th class="py-3">Permissões</th>
                            <th class="px-4 py-3 text-center">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($utilizadores as $utilizador)
                        <tr class="border-b border-gray-200">
                            <td class="px-4 py-3 font-semibold">{{ $utilizador->id }}</td>
                            <td class="px-4 py-3 font-semibold">{{ $utilizador->name }}</td>
                            <td class="px-4 py-3 font-semibold ">{{ $utilizador->email }}</td>
                            <td class="py-3 text-center">
                                <div class="grid grid-cols-4 space-y-2 space-x-1">
                                    {{--@foreach ($utilizador->permissions as $permissao)
                                          <span class="p-2 text-xs text-center font-semibold text-green-600 bg-green-200 rounded-full">{{ $permissao->name }}</span>
                                    @endforeach--}}
                                </div>
                            </td>
                            <td class="flex px-4 py-3 text-right items-center justify-end space-x-2">
                                <button class="px-3 py-1 text-sm font-bold text-blue-500 bg-transparent border border-blue-500 rounded-md hover:bg-blue-500 hover:text-white"
                                    wire:click="editarPermissoes({{$utilizador->id}})">Editar Permissões</button>
                                <button class="px-3 py-1 text-sm font-bold text-red-500 bg-transparent border border-red-500 rounded-md hover:bg-red-500 hover:text-white"
                                    wire:click='deletarUtilizador()'>Deletar</button>
                                {{--<!--<button class="w-[50%] px-3 py-1 text-sm font-bold text-green-500 bg-transparent border border-green-500 rounded-md hover:bg-green-500 hover:text-white"
                                      wire:click='modalAtribuicaoPermissao({{ $utilizador->id }}, {{ $role_id }})'>
                                Atribuir permissão
                                </button>-->--}}
                                @if ($utilizador->ativo == 1)
                                <label class="relative inline-block h-6 w-14 cursor-pointer rounded-full bg-gray-300 transition [-webkit-tap-highlight-color:_transparent] has-[:checked]:bg-gray-900"
                                    wire:click="ativarDesativarUtilizador({{ $utilizador->ativo }}, {{ $utilizador->id }})">
                                    <input class="peer sr-only" id="AcceptConditions" type="checkbox" value="1"
                                        checked />
                                    <span class="absolute inset-y-0 start-0 m-1 size-4 rounded-full bg-gray-300 ring-[6px] ring-inset ring-white transition-all peer-checked:start-8 peer-checked:w-2 peer-checked:bg-white peer-checked:ring-transparent"></span>
                                </label>
                                @else
                                <label class="relative inline-block h-6 w-14 cursor-pointer rounded-full bg-gray-300 transition [-webkit-tap-highlight-color:_transparent] has-[:checked]:bg-gray-900"
                                    wire:click="ativarDesativarUtilizador({{ $utilizador->ativo }}, {{ $utilizador->id }})">
                                    <input class="peer sr-only" id="AcceptConditions" type="checkbox"
                                        value="0" />
                                    <span class="absolute inset-y-0 start-0 m-1 size-4 rounded-full bg-gray-300 ring-[6px] ring-inset ring-white transition-all peer-checked:start-8 peer-checked:w-2 peer-checked:bg-white peer-checked:ring-transparent"></span>
                                </label>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @if($atribuir)
                <div class="w-full">
                    @include('pagina.gestao-user.componente.permissoes')
                </div>
                @endif
            </div>
        </div>
    </div>
</div>