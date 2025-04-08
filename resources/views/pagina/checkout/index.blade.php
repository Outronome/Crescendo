<div class="mx-auto mt-6 max-w-4xl flex-1 space-y-6 lg:mt-6 lg:w-full">
    <div class="space-y-4 rounded-lg border border-[#649dad] bg-[#649dad] p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800 sm:p-6">
        <p class="text-xl font-semibold text-white dark:text-white">Resumo do Checkout</p>

        @if(session()->has('success'))
            <div class="text-green-300">{{ session('success') }}</div>
        @endif

        @if(session()->has('error'))
            <div class="text-red-300">{{ session('error') }}</div>
        @endif

        <div class="overflow-x-auto">
            <table class="w-full text-sm text-white dark:text-gray-300">
                <thead>
                    <tr class="border-b border-gray-400">
                        <th class="text-left py-2">Música</th>
                        <th class="text-center py-2">Quantidade</th>
                        <th class="text-center py-2">Preço</th>
                        <th class="text-center py-2">Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($itens as $item)
                        <tr class="border-b border-gray-600">
                            <td class="py-2">{{ $item['musica']->titulo }}</td>
                            <td class="text-center py-2">{{ $item['quantidade'] }}</td>
                            <td class="text-center py-2">€{{ number_format($item['musica']->price, 2) }}</td>
                            <td class="text-center py-2">€{{ number_format($item['subtotal'], 2) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <dl class="flex items-center justify-between gap-4 border-t border-white pt-4">
            <dt class="text-base font-bold text-white dark:text-white">Total</dt>
            <dd class="text-base font-bold text-white dark:text-white">€{{ number_format($total, 2) }}</dd>
        </dl>

        <button wire:click="finalizarCompra"
            class="flex w-full items-center justify-center rounded-lg bg-primary-700 px-5 py-2.5 text-sm font-medium text-black hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
            Finalizar Compra
        </button>

        <div class="flex items-center justify-center gap-2">
            <span class="text-sm font-normal text-white dark:text-gray-400"> ou </span>
            <a href="{{ route('market') }}" title="Voltar ao mercado"
                class="inline-flex items-center gap-2 text-sm font-medium text-white underline hover:no-underline dark:text-primary-500">
                Continuar a Comprar
                <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 12H5m14 0-4 4m4-4-4-4" />
                </svg>
            </a>
        </div>
    </div>
</div>
