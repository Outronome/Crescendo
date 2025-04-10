<?php

namespace App\Livewire\Pagina\Checkout;

use Livewire\Component;
use App\Models\Carrinho;
use App\Models\Compra;
use App\Models\FaturaComprada;
use App\Models\CompraMusica;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Mail;
use App\Mail\CompraFinalizadaMail;

class Index extends Component
{
    public $itens = [];
    public $total = 0;

    public function mount()
    {
        // Load the cart items when the component is mounted
        $this->loadCheckoutItems();
    }

    public function loadCheckoutItems()
    {
        // Retrieve the cart for the authenticated user
        $this->carrinho = Carrinho::where('user_id', Auth::id())->first();

        if ($this->carrinho) {
            // Eager load the `musica` relationship on the `detalhesCarrinho`
            $this->itens = $this->carrinho->detalhesCarrinho()->with('musica')->get()->map(function ($item) {
                // Ensure 'musica' is loaded correctly
                if ($item->musica) {
                    return [
                        'musica' => $item->musica,  // Access the music related to this cart item
                        'quantidade' => $item->quantidade,  // Get the quantity of the music
                        'subtotal' => $item->musica->price * $item->quantidade,  // Calculate the subtotal for this item
                    ];
                }
            })->filter()->toArray();  // Remove any null values

            // Calculate the total of the cart
            $this->total = array_sum(array_column($this->itens, 'subtotal'));
        }
    }

    public function finalizarCompra()
    {
        $user = Auth::user();

        // Fetch the user's cart with all items
        $carrinho = Carrinho::with('detalhesCarrinho.musica')->where('user_id', $user->id)->first();

        // Check if cart is empty
        if (!$carrinho || $carrinho->detalhesCarrinho->isEmpty()) {
            session()->flash('error', 'Nenhum item para compra.');
            return;
        }

        // Create the purchase
        $compra = Compra::create([
            'user_id' => $user->id,
            'total' => 0, // will be updated after processing the cart items
        ]);

        $total = 0;

        // Loop through the cart items and add them to the purchase
        foreach ($carrinho->detalhesCarrinho as $item) {
            CompraMusica::create([
                'compra_id' => $compra->id,
                'musica_id' => $item->musica_id,
                'quantidade' => $item->quantidade,
            ]);

            // Calculate the total price of the purchase
            $total += $item->musica->price * $item->quantidade;
        }

        // Update the total of the purchase
        $compra->update(['total' => $total]);
        Mail::to($user->email)->send(new CompraFinalizadaMail($compra));
        // Clear the cart (remove all items from the cart)
        $carrinho->detalhesCarrinho()->delete();

        // Flash success message
        session()->flash('success', 'Compra finalizada com sucesso!');
       
        return redirect()->route('inicio');
    }

    #[Layout('layout.front')]
    public function render()
    {
        return view('pagina.checkout.index');
    }
}
