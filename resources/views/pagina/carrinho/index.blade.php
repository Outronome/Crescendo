<section class=" py-8 antialiased bg-[#85b2bf] md:py-16">
@section('topbar')
    <livewire:Layout.Topbar />
  @endsection
  <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">

  <div class="space-y-6">
    @forelse ($itens as $item)
        @php
            $musica = $item->musica;
        @endphp
        <div class="rounded-lg border border-[#649dad] bg-[#649dad] p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800 md:p-6">
            <div class="space-y-4 md:flex md:items-center md:justify-between md:gap-6 md:space-y-0">

                {{-- Imagem --}}
                <a href="#" class="shrink-0 md:order-1">
                    <img src="{{ $musica->imagem_url ?? 'https://via.placeholder.com/150' }}" alt="{{ $musica->titulo ?? 'Música' }}"
                        class="w-40 h-40 mx-auto rounded-lg mb-4 shadow-lg shadow-black">
                </a>

                {{-- Quantidade + Preço --}}
                <div class="flex items-center justify-between md:order-3 md:justify-end">
                    <div class="flex items-center">
                        <button type="button" wire:click="adicionarMusica({{ $musica->id }})"
                            class="inline-flex h-5 w-5 items-center justify-center rounded-md border border-gray-300 bg-gray-100 hover:bg-gray-200 dark:border-gray-600 dark:bg-gray-700 dark:hover:bg-gray-600">
                            <svg class="h-2.5 w-2.5 text-gray-900 dark:text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M9 1v16M1 9h16" />
                            </svg>
                        </button>

                        <input type="text" readonly
                            class="w-10 border-0 bg-transparent text-center text-sm font-medium text-gray-900 dark:text-white"
                            value="{{ $item->quantidade }}" />

                        <button type="button" wire:click="removerMusica({{ $musica->id }})"
                            class="inline-flex h-5 w-5 items-center justify-center rounded-md border border-gray-300 bg-gray-100 hover:bg-gray-200 dark:border-gray-600 dark:bg-gray-700 dark:hover:bg-gray-600">
                            <svg class="h-2.5 w-2.5 text-gray-900 dark:text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 2">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M1 1h16" />
                            </svg>
                        </button>
                    </div>

                    {{-- Preço unitário ou total --}}
                    <div class="text-end ml-4">
                        <p class="text-base font-bold text-gray-900 dark:text-white">
                            €{{ number_format($musica->price * $item->quantidade, 2, ',', '.') }}
                        </p>
                    </div>
                </div>

                {{-- Título + Ações --}}
                <div class="w-full flex-1 space-y-4 md:order-2 md:max-w-md">
                    <p class="text-base font-medium text-gray-900 dark:text-white">{{ $musica->titulo }}</p>

                    <div class="flex items-center gap-4">
                        <button type="button" class="inline-flex items-center text-sm font-medium text-gray-200 hover:text-white hover:underline">
                            <svg class="me-1.5 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z" />
                            </svg>
                            Favoritar
                        </button>

                        <button type="button" wire:click="removerMusica({{ $musica->id }})" class="inline-flex items-center text-sm font-medium text-red-100 hover:text-red-400 hover:underline">
                            <svg class="me-1.5 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6" />
                            </svg>
                            Remover
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <p class="text-center text-gray-200">Seu carrinho está vazio.</p>
    @endforelse
</div>


      <div class="mx-auto mt-6 max-w-4xl flex-1 space-y-6 lg:mt-6 lg:w-full">
        <div class="space-y-4 rounded-lg border border-[#649dad] bg-[#649dad] p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800 sm:p-6">
          <p class="text-xl font-semibold text-gray-900 dark:text-white">Order summary</p>

          <div class="space-y-4">
            <div class="space-y-2">
              <dl class="flex items-center justify-between gap-4">
                <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Original price</dt>
                <dd class="text-base font-medium text-gray-900 dark:text-white">€4,99</dd>
              </dl>

              <dl class="flex items-center justify-between gap-4">
                <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Savings</dt>
                <dd class="text-base font-medium text-green-600">-€1,99</dd>
              </dl>

              <dl class="flex items-center justify-between gap-4">
                <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Store Pickup</dt>
                <dd class="text-base font-medium text-gray-900 dark:text-white">$4,99</dd>
              </dl>

              <dl class="flex items-center justify-between gap-4">
                <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Tax</dt>
                <dd class="text-base font-medium text-gray-900 dark:text-white">€6,99</dd>
              </dl>
            </div>

            <dl class="flex items-center justify-between gap-4 border-t border-black pt-2 dark:border-gray-700">
              <dt class="text-base font-bold text-gray-900 dark:text-white">Total</dt>
              <dd class="text-base font-bold text-gray-900 dark:text-white">€6,99</dd>
            </dl>
          </div>

          <a href="{{ route('checkout') }}" class="flex w-full items-center justify-center rounded-lg bg-primary-700 px-5 py-2.5 text-sm font-medium text-black hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Proceed to Checkout</a>

          <div class="flex items-center justify-center gap-2">
            <span class="text-sm font-normal text-gray-500 dark:text-gray-400"> or </span>
            <a href="{{ route(name: 'market') }}" title="" class="inline-flex items-center gap-2 text-sm font-medium text-primary-700 underline hover:no-underline dark:text-primary-500">
              Continue Shopping
              <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>