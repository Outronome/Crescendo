<div class="static bg-cover bg-center h-screen  ">

    @section('topbar')
        <livewire:Layout.Topbar />
    @endsection

    <div class="h-full w-full">

        <div class=" max-w-screen-xl flex flex-col items-center justify-between mx-auto relative mt-28 rounded">
            <div class="w-full h-[50px] rounded text-center    shadow-lg mb-[15px]  bg-[#f4f8ff]  ">
                <div class="w-full h-full border flex items-center rounded justify-between px-2 py-2 bg-[#66c6ba]">

                    <!-- Input de pesquisa -->
                    <input type="text" placeholder="Pesquisa"
                        class=" text-black rounded px-2 py-1 h-10 bg-white/90 shadow-lg outline-none border-none " />

                    <!-- Filtros alinhados à direita -->
                    <div class="flex gap-2">
                        <!-- Filtro 1 -->
                        <div class="relative" x-data="{ open: false }">
                            <button @click="open = !open"
                                class="flex items-center border border-gray-300 rounded-md px-3 py-2 bg-white text-sm hover:bg-gray-50">
                                Filtros
                                <svg class="ml-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div x-show="open" @click.away="open = false"
                                class="absolute right-0 mt-2 w-48 z-50 bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5">
                                <div class="py-1">
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Mais
                                        recentes</a>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Mais
                                        antigos</a>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Favoritos</a>
                                </div>
                            </div>
                        </div>

                        <!-- Filtro 2 -->
                        <div class="relative" x-data="{ open: false }">
                            <button @click="open = !open"
                                class="flex items-center border border-gray-300 rounded-md px-3 py-2 bg-white text-sm hover:bg-gray-50">
                                Categoria
                                <svg class="ml-2 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div x-show="open" @click.away="open = false"
                                class="absolute right-0 mt-2 w-48 z-50 bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5">
                                <div class="py-1">
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Livros</a>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Vídeos</a>
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Podcasts</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <section class="w-full  items-center">
                <div class="max-w-screen-xl  flex items-center justify-between mx-auto relative ">
                    <!-- Start coding here -->
                    <div class=" ml-1 gap-[35px] grid grid-cols-4 max-w-screen-xl  2xl:px-0">
                        @forelse ($musicas as $musica)
                            <div class="mb-4">
                                <div
                                    class="rounded-lg border border-gray-200 bg-[#66c6ba] p-6 shadow-sm ">
                                    <div class="h-56 w-full">
                                        <a href="#" class="shrink-0 md:order-1">
                                            <!-- Music Image -->
                                            <img src="{{ asset('storage/' . $musica->file_url) }}"
                                                alt="{{ $musica->title }}"
                                                class="w-60 h-60 mx-auto rounded-lg mb-4 shadow-lg shadow-black">
                                        </a>
                                    </div>

                                    <div class="pt-8">
                                        <div class="mb-4 flex items-center justify-between gap-4">


                                            <div class="flex items-center justify-end gap-1">
                                                <button type="button" data-tooltip-target="tooltip-quick-look"
                                                    class="rounded-lg p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-900 ">
                                                    <span class="sr-only"> Play Music </span>
                                                    <svg class="h-5 w-5" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        fill="none" viewBox="0 0 24 24">
                                                        <path stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" d="M7 4v16l13-8L7 4z" />
                                                    </svg>
                                                </button>
                                                <div id="tooltip-quick-look" role="tooltip"
                                                    class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 "
                                                    data-popper-placement="top">
                                                    Play Music
                                                    <div class="tooltip-arrow" data-popper-arrow=""></div>
                                                </div>
                                            </div>

                                            <button wire:click="toggleWishlist({{ $musica->id }})" class="transition-colors duration-300 p-2 rounded-full
                                        {{ in_array($musica->id, $wishlistIds) ? 'text-pink-500' : 'text-gray-400' }}
                                        hover:text-pink-500">
                                                <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                                                    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5
                                               2 5.42 4.42 3 7.5 3c1.74 0 3.41 0.81 4.5 2.09
                                               C13.09 3.81 14.76 3 16.5 3
                                               19.58 3 22 5.42 22 8.5
                                               c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                                                </svg>
                                            </button>

                                            <div id="tooltip-add-to-favorites" role="tooltip"
                                                class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 "
                                                data-popper-placement="top">
                                                Add to favorites
                                                <div class="tooltip-arrow" data-popper-arrow=""></div>

                                            </div>

                                        </div>
                                        <div class="mt-4 flex items-center justify-between gap-4">
                                            <!-- Music Price -->
                                            <p class="text-2xl font-extrabold leading-tight text-gray-900 ">
                                                €{{ $musica->price }}</p>

                                            <button type="button" wire:click="adicionarMusica({{ $musica->id }})"
                                                class="inline-flex items-center rounded-lg bg-primary-700 px-5 py-2.5 text-sm font-medium text-black hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 ">
                                                <svg class="-ms-2 me-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg"
                                                    fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="M4 4h1.5L8 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm.75-3H7.5M11 7H6.312M17 4v6m-3-3h6" />
                                                </svg>
                                                Add to cart
                                            </button>

                                        </div>
                                    </div>

                                    <a href="#"
                                        class="text-lg font-semibold leading-tight text-gray-900 hover:underline ">
                                        {{ $musica->title }} <!-- Music Title -->
                                    </a>

                                    <div class="mt-2 flex items-center gap-2">




                                    </div>


                                </div>
                            </div>
                        @empty
                            <p>No music available.</p>
                        @endforelse
                    </div>
                </div>
                <div
                    class=" flex-row w-full h-full grid grid-cols-3  gap-24 justify-between   mt-10 mb-10   rounded-[15px]   ">


                </div>
            </section>



        </div>
    </div>
</div>