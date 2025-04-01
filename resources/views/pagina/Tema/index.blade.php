<div class=" text-white p-6">
@section('topbar')
        <livewire:Layout.Topbar />
    @endsection
    <div class="max-w-screen-xl  items-center justify-between mx-auto relative rounded-lg mt-20 p-6 bg-[#649dad]">
        <div class="flex justify-between items-center mb-4 ">
            <input type="text" placeholder="Nome Tema" id="novo_nome" wire:key="input-novo_nome" class="w-[1050px] p-2 rounded-lg bg-[#649dad]  text-white placeholder-gray-400 focus:outline-none" wire:model.defer="nome">
            <button class="ml-4 px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600" type="submit" wire:click="adicionar">+ Adicionar Tema</button>
        </div>
        <table class="bg-[#85b2bf] p-3 rounded-md text-gray-300">
        <thead class="rounded-md">
                        <tr>
                            <th class="sticky top-0 px-4 py-2  bg-[#85b2bf] z-10 text-lg font-bold w-1/12">
                                <input placeholder="Pesquisar..." class=" bg-[#85b2bf] p-2 border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500 " type="text" wire:model.live="pesquisa" />
                            </th>
                            <th class="sticky top-0 px-4 py-2 bg-[#85b2bf] z-10 text-lg font-bold">Nome</th>
                            <th class="sticky top-0 px-4 py-2 bg-[#85b2bf] z-10 text-lg font-bold">Estado</th>
                            <th class="sticky top-0 px-4 py-2 bg-[#85b2bf] z-10 text-lg font-bold">Data</th>
                            <th class="sticky top-0 px-4 py-2 bg-[#85b2bf] z-10 text-lg font-bold">Ações</th>
                        </tr>
                    </thead>
                    <tbody class="overflow-y-auto max-h-[60vh]">
                        @foreach ($temas as $index => $tema)
                            <tr x-data="{ nome: '{{ $tema->nome }}' }">
                                <td class="transform-gpu hover:scale-125 "></td>
                                <td>
                                    @if (isset($editar[$index]) && $editar[$index] )
                                        <input type="text" wire:model="nome"  x-model="nome" class="p-2 border border-gray-200 rounded-md focus:outline-none focus:ring-1 focus:ring-blue-500 "/>
                                    @else
                                    <p class="transform-gpu hover:scale-125 text-center font-bold">
                                        {{$tema->nome}}
                                    </p>
                                    @endif
                                </td><!--Falta Definir o estado-->
                                <td class="transform-gpu hover:scale-125 ">
                                    @if (isset($editar[$index]) && $editar[$index] )
                                        <div class="">
                                            <div class="mb-5">
                                            <div class="relative w-full mt-2 rounded-md border h-12 p-1 bg-gray-200" x-data="{ selected: {{ $tema->ativo == 'Ativo' ? 'true' : 'false' }} }">
                                                <div class="relative w-full h-full flex items-center">
                                                    <!-- Botão Ativo -->
                                                    <div @click="selected = true; $wire.atualizarAtivo({{ $tema->id }}, true)" class="w-full flex justify-center text-gray-400 cursor-pointer">
                                                        <button type="button">Ativo</button>
                                                    </div>
                                                    <!-- Botão Desativo -->
                                                    <div @click="selected = false; $wire.atualizarAtivo({{ $tema->id }}, false)" class="w-full flex justify-center text-gray-400 cursor-pointer">
                                                        <button type="button">Desativo</button>
                                                    </div>
                                                </div>
                                                <!-- Indicador de Estado -->
                                                <span :class="{ 'left-1/2 -ml-1 text-orange-600 font-semibold': !selected, 'left-1 text-indigo-600 font-semibold': selected }"
                                                    x-text="selected ? 'Ativo' : 'Desativo'"
                                                    class="bg-white shadow text-sm flex items-center justify-center w-1/2 rounded h-9 transition-all duration-150 ease-linear top-[5px] absolute"></span>

                                            </div>

                                            @error('garantia_equipamento') <span class="error text-red-500">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                    @else
                                        {{$tema->ativo}}
                                        
                                    @endif
                                </td>
                                <td class="transform-gpu hover:scale-125 text-center font-bold ">
                                    Criado: {{$tema->CreatedData}} <br> Editado: {{$tema->UpdatedData}}
                                </td>
                                <td class="flex items-center justify-evenly">
                                  @if (isset($editar[$index]) && $editar[$index])
                                          <button type="button"  wire:key="tema-{{ $tema->id }}" wire:click="guardarTema({{$index}})">
                                              <img class=" text-center w-6 mt-2 transform-gpu hover:scale-125" src="{{asset('/assets/img/guardar.webp')}}"/>
                                          </button>
                                  @else
                                          <button type="button" wire:click="editarTema({{$index}})">
                                              <img class=" text-center w-6 mt-2 transform-gpu hover:scale-125" src="{{asset('/assets/img/editar.png')}}"/>
                                          </button>
                                  @endif
                                    
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

        </table>
        <div class="mt-4 text-gray-400">
            <p>Showing <span class="text-blue-400">1-10</span> of <span class="text-white font-bold">1000</span></p>
        </div>
        <div class="flex justify-center mt-4">
            <nav class="inline-flex items-center space-x-2">
                <button class="px-3 py-2 bg-gray-700 rounded-lg hover:bg-gray-600">&lt;</button>
                <button class="px-3 py-2 bg-gray-700 rounded-lg hover:bg-gray-600">1</button>
                <button class="px-3 py-2 bg-gray-700 rounded-lg hover:bg-gray-600">2</button>
                <button class="px-3 py-2 bg-blue-500 text-white rounded-lg">3</button>
                <span class="px-3 py-2 text-gray-400">...</span>
                <button class="px-3 py-2 bg-gray-700 rounded-lg hover:bg-gray-600">100</button>
                <button class="px-3 py-2 bg-gray-700 rounded-lg hover:bg-gray-600">&gt;</button>
            </nav>
        </div>
    </div>

    <!-- End block -->
  <!-- Create modal -->
  <div id="createProductModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
      <div class="relative p-4 w-full max-w-2xl max-h-full">
          <!-- Modal content -->
          <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
              <!-- Modal header -->
              <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                  <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Adicionar Tema</h3>
                  <button type="button" wire:click="editar" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
                      <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                      </svg>
                      <span class="sr-only">Close modal</span>
                  </button>
              </div>
              <!-- Modal body -->
              <form action="#">
                  <div class="grid gap-4 mb-4 sm:grid-cols-2">
                      <div>
                          <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome</label>
                          <input type="text" wire:model="nome" name="nome" id="nome" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type product name" required="">
                          @error('nome')
                              <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                          @enderror
                      </div>
                      
                  <button type="submit" wire:click="adicionar" class="text-white inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                      <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                      </svg>
                      Adicionar Tema
                  </button>
              </form>
          </div>
      </div>
  </div>
  <!-- Update modal -->
  <div id="updateProductModal" tabindex="-1" aria-hidden="editar" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
      <div class="relative p-4 w-full max-w-2xl max-h-full">
          <!-- Modal content -->
          <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
              <!-- Modal header -->
              <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                  <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Update Product</h3>
                  <button type="button" wire:click="editar" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" >
                      <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                      </svg>
                      <span class="sr-only">Close modal</span>
                  </button>
              </div>
              <!-- Modal body -->
              <form action="#">
                  <div class="grid gap-4 mb-4 sm:grid-cols-2">
                      <div>
                          <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                          <input type="text" name="name" id="name" value="iPad Air Gen 5th Wi-Fi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Ex. Apple iMac 27&ldquo;">
                      </div>
                      <div>
                          <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Brand</label>
                          <input type="text" name="brand" id="brand" value="Google" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Ex. Apple">
                      </div>
                      <div>
                          <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                          <input type="number" value="399" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="$299">
                      </div>
                      <div><label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label><select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"><option selected="">Electronics</option><option value="TV">TV/Monitors</option><option value="PC">PC</option><option value="GA">Gaming/Console</option><option value="PH">Phones</option></select></div>
                      <div class="sm:col-span-2"><label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label><textarea id="description" rows="5" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Write a description...">Standard glass, 3.8GHz 8-core 10th-generation Intel Core i7 processor, Turbo Boost up to 5.0GHz, 16GB 2666MHz DDR4 memory, Radeon Pro 5500 XT with 8GB of GDDR6 memory, 256GB SSD storage, Gigabit Ethernet, Magic Mouse 2, Magic Keyboard - US</textarea></div>
                  </div>
                  <div class="flex items-center space-x-4">
                      <button type="submit" class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Update product</button>
                      <button type="button" class="text-red-600 inline-flex items-center hover:text-white border border-red-600 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">
                          <svg class="mr-1 -ml-1 w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                          </svg>
                          Delete
                      </button>
                  </div>
              </form>
          </div>
      </div>
  </div>
  <!-- Read modal -->
  <div id="readProductModal" tabindex="-1" aria-hidden="false" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
      <div class="relative p-4 w-full max-w-xl max-h-full">
          <!-- Modal content -->
          <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
              <!-- Modal header -->
              <div class="flex justify-between mb-4 rounded-t sm:mb-5">
                  <div class="text-lg text-gray-900 md:text-xl dark:text-white">
                      <h3 class="font-semibold ">Apple iMac 27”</h3>
                      <p class="font-bold">$2999</p>
                  </div>
                  <div>
                      <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 inline-flex dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="readProductModal">
                          <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                          </svg>
                          <span class="sr-only">Close modal</span>
                      </button>
                  </div>
              </div>
              <dl><dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Details</dt><dd class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">Standard glass ,3.8GHz 8-core 10th-generation Intel Core i7 processor, Turbo Boost up to 5.0GHz, 16GB 2666MHz DDR4 memory, Radeon Pro 5500 XT with 8GB of GDDR6 memory, 256GB SSD storage, Gigabit Ethernet, Magic Mouse 2, Magic Keyboard - US.</dd><dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">Category</dt><dd class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">Electronics/PC</dd></dl>
              <div class="flex justify-between items-center">
                  <div class="flex items-center space-x-3 sm:space-x-4">
                      <button type="button" class="text-white inline-flex items-center bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                          <svg aria-hidden="true" class="mr-1 -ml-1 w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                              <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                              <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                          </svg>
                          Edit
                      </button>
                      <button type="button" class="py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Preview</button>
                  </div>
                  <button type="button" class="inline-flex items-center text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900">
                      <svg aria-hidden="true" class="w-5 h-5 mr-1.5 -ml-1" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                      </svg>
                      Delete
                  </button>
              </div>
          </div>
      </div>
  </div>
  <!-- Delete modal -->
  <div id="deleteModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
      <div class="relative p-4 w-full max-w-md max-h-full">
          <!-- Modal content -->
          <div class="relative p-4 text-center bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
              <button type="button" class="text-gray-400 absolute top-2.5 right-2.5 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="deleteModal">
                  <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                  </svg>
                  <span class="sr-only">Close modal</span>
              </button>
              <svg class="text-gray-400 dark:text-gray-500 w-11 h-11 mb-3.5 mx-auto" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
              </svg>
              <p class="mb-4 text-gray-500 dark:text-gray-300">Are you sure you want to delete this item?</p>
              <div class="flex justify-center items-center space-x-4">
                  <button data-modal-toggle="deleteModal" type="button" class="py-2 px-3 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No, cancel</button>
                  <button type="submit" class="py-2 px-3 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900">Yes, I'm sure</button>
              </div>
          </div>
      </div>
  </div>
</div>

    
</div>
