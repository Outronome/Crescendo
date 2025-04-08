<div class="px-6">
    <div class="px-6">
        <div class="container flex justify-between mx-auto">
            <div class="w-full">
                <div class="mt-6">
                    <div class="w-full">
                        <div class="flex items-center mb-4">
                            <button wire:click="gerirBlogs" class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mr-2">Gerir Blogs</button>
                        </div>
                    </div>

                    @if ($modo === 'lista')
                        @foreach ($posts as $post)
                            <div class="max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md">
                                <div class="flex items-center justify-between">
                                    <span class="font-light text-gray-600">{{ $post['date'] }}</span>
                                    <button wire:click="editarPost({{ $post['id'] }})" class="px-2 py-1 font-bold text-gray-100 bg-gray-600 rounded hover:bg-gray-500">Editar</button>
                                </div>
                                <div class="mt-2">
                                    <h2 class="text-2xl font-bold text-gray-700 hover:underline">{{ $post['title'] }}</h2>
                                    <p class="mt-2 text-gray-600">{{ $post['content'] }}</p>
                                </div>
                                <div class="flex items-center justify-between mt-4">
                                    <button wire:click="adicionarComentario({{ $post['id'] }})" class="text-blue-500 hover:underline">Adicionar Comentário</button>
                                    <div>
                                        <a href="#" class="flex items-center">
                                            <img src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80" alt="avatar" class="hidden object-cover w-10 h-10 mx-4 rounded-full sm:block">
                                            <h1 class="font-bold text-gray-700 hover:underline">{{ $post['author'] }}</h1>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @elseif ($modo === 'editar')
                        @if ($postAtual)
                            <form wire:submit.prevent="guardarPost">
                                <label for="title">Título:</label>
                                <input type="text" id="title" wire:model="postAtual.title">

                                <label for="content">Conteúdo:</label>
                                <textarea id="content" wire:model="postAtual.content"></textarea>

                                <button type="submit">Guardar</button>
                            </form>
                        @else
                            <p>Post não encontrado.</p>
                        @endif
                    @elseif ($modo === 'comentar')
                        @if ($postAtual)
                            <form wire:submit.prevent="guardarComentario">
                                <label for="comment">Comentário:</label>
                                <textarea id="comment" wire:model="comentario"></textarea>

                                <button type="submit">Guardar</button>
                            </form>
                        @else
                            <p>Post não encontrado.</p>
                        @endif
                    @endif
                </div>
                <div class="mt-8 ">
                    <div class="flex justify-end">
                        <a href="#" class="px-3 py-2 mx-1 font-medium text-gray-500 bg-white rounded-md cursor-not-allowed">
                            previous
                        </a>
                        <a href="#" class="px-3 py-2 mx-1 font-medium text-gray-700 bg-white rounded-md hover:bg-blue-500 hover:text-white">
                            1
                        </a>
                        <a href="#" class="px-3 py-2 mx-1 font-medium text-gray-700 bg-white rounded-md hover:bg-blue-500 hover:text-white">
                            2
                        </a>
                        <a href="#" class="px-3 py-2 mx-1 font-medium text-gray-700 bg-white rounded-md hover:bg-blue-500 hover:text-white">
                            3
                        </a>
                        <a href="#" class="px-3 py-2 mx-1 font-medium text-gray-700 bg-white rounded-md hover:bg-blue-500 hover:text-white">
                            Next
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div x-data="{ open: @entangle('mostrarPopup') }">
        <div x-show="open" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
            <div class="bg-[#66c6ba] p-6 rounded-lg w-3/4">
                <h2 class="font-bold mb-5">Gerir Blogs</h2>
                <button wire:click="criarNovoPost" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2">Criar Blog</button>
                <table class="w-full ">
                    <thead>
                        <tr>
                            <th class="text-start">Título</th>
                            <th class="text-start">Descrição</th>
                            <th class="text-center">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td class="">{{ $post['title'] }}</td>
                                <td class="mr-5">{{ $post['content'] }}</td>
                                <td class="text-center">
                                    <button wire:click="editarPost({{ $post['id'] }})" class=" text-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-32">Editar</button>
                                    <button wire:click="visualizarPost({{ $post['id'] }})" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded w-32">Visualizar</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <button wire:click="$set('mostrarPopup', false)" class="mt-4 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Fechar</button>
            </div>
        </div>
    </div>

    <div x-data="{ open: @entangle('mostrarPopupEditar') }">
        <div x-show="open" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
            <div class="bg-white p-6 rounded-lg">
                <h2>Editar Post</h2>
                @if ($postAtual)
                    <form wire:submit.prevent="guardarPost">
                        <label for="title">Título:</label>
                        <input type="text" id="title" wire:model="postAtual.title">

                        <label for="content">Conteúdo:</label>
                        <textarea id="content" wire:model="postAtual.content"></textarea>

                        <button type="submit">Guardar</button>
                    </form>
                @else
                    <p>Post não encontrado.</p>
                @endif
                <button wire:click="$set('mostrarPopupEditar', false)">Fechar</button>
            </div>
        </div>
    </div>

    <div x-data="{ open: @entangle('mostrarPopupComentar') }">
        <div x-show="open" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
            <div class="bg-white p-6 rounded-lg">
                <h2>Adicionar Comentário</h2>
                @if ($postAtual)
                    <form wire:submit.prevent="guardarComentario">
                        <label for="comment">Comentário:</label>
                        <textarea id="comment" wire:model="comentario"></textarea>

                        <button type="submit">Guardar</button>
                    </form>
                @else
                    <p>Post não encontrado.</p>
                @endif
                <button wire:click="$set('mostrarPopupComentar', false)">Fechar</button>
            </div>
        </div>
    </div>

    <div x-data="{ open: @entangle('mostrarPopupCriar') }">
        <div x-show="open" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50">
            <div class="bg-white p-6 rounded-lg">
                <h2>Criar Novo Post</h2>
                <form wire:submit.prevent="salvarNovoPost">
                    <label for="title">Título:</label>
                    <input type="text" id="title" wire:model="postAtual.title">

                    <label for="content">Conteúdo:</label>
                    <textarea id="content" wire:model="postAtual.content"></textarea>

                    <button type="submit">Guardar Novo Blog</button>
                </form>
                <button wire:click="$set('mostrarPopupCriar', false)">Fechar</button>
            </div>
        </div>
    </div>
</div>