<div class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
    <div class="bg-white rounded-lg p-6 w-full max-w-lg">
      <div class="flex items-center justify-between mb-4">
        <h3 class="text-xl font-semibold text-gray-900">Edit Music</h3>
        <button type="button" wire:click="fecharPopUpEdit" class="text-gray-400 bg-transparent hover:bg-gray-200 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-hide="accountInformationModal">
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
          <span class="sr-only">Close modal</span>
        </button>
      </div>
      <form class="space-y-4">
     
        <div>
          <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Nome da musica</label>
          <input type="text" id="title" wire:model="titulo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Nome da musica" required>
          @error('title')
            <span class="error text-red-500">{{ $message }}</span>
            @enderror
        </div>
        {{-- <div>
          <label for="file_photo" class="block mb-2 text-sm font-medium text-gray-900">Upload Foto</label>
          <input type="file" id="file_photo" wire:model="foto_capa_music" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
          @error('file_photo')
            <span class="error text-red-500">{{ $message }}</span>
            @enderror
        </div> --}} 
        <div>
          <label for="price" class="block mb-2 text-sm font-medium text-gray-900">Preço</label>
          <input type="text" id="price" wire:model="preco" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Digite um preço" required>
          @error('price')
            <span class="error text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div>
          <label for="tema" class="block mb-2 text-sm font-medium text-gray-900">Estilo</label>
          <input type="text" id="tema_id" wire:model="tema" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Estilo da musica" required>
          @error('tema')
            <span class="error text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div>
          <label for="musica" class="block mb-2 text-sm font-medium text-gray-900">Upload Musica</label>
          <input type="file" id="musica" wire:model="file_url" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
          @error('file_url')
            <span class="error text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex justify-end space-x-2">
          <button type="button" wire:click="editarMusica" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Upload</button>
          <button type="button" wire:click="fecharPopUpEdit" class="text-gray-900 bg-white border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg text-sm px-5 py-2.5 text-center">Cancel</button>
        </div>
      </form>
    </div>
  </div>