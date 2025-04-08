<div class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
    <div class="bg-white rounded-lg p-6 w-full max-w-lg">
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-xl font-semibold text-gray-900">Permissões</h3>
            <button type="button" wire:click="fecharPopUp" class="text-gray-400 bg-transparent hover:bg-gray-200 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-hide="accountInformationModal">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
        </div>
        <form class="space-y-4">
            <div class="overflow-x-auto shadow-md sm:rounded-lg">
                <table class="min-w-full bg-white border-collapse">

                    <thead class="bg-gray-800 text-white">
                        <tr>
                            @foreach($roles as $role)
                            <th class="px-6 py-3 text-left">{{ $role->name }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>

                        <tr class="border-b hover:bg-gray-100">
                            @foreach($roles as $role)
                            <td class="px-6 py-4">
                                <ul>
                                    @foreach($role->permissions as $permission)

                                    <li class="text-gray-700" wire:key="{{ $permission->id }}">
                                        <input 
    type="checkbox" 
    id="{{ $permission->id }}" 
    name="{{ $permission->id }}" 
    value="{{ $permission->name }}" 
    wire:change="selecionarPermissoes('{{ $permission->name }}', {{ in_array($permission->name, $permissoes_atribuidas) ? 'false' : 'true' }})"
    @if(in_array($permission->name, $permissoes_atribuidas)) checked @endif
>
                                        {{ $permission->name }}
                                        
                                    </li>
                                    @endforeach
                                </ul>
                            </td>
                            @endforeach
                        </tr>

                    </tbody>
                </table>
            </div>
        </form>
    </div>
</div>