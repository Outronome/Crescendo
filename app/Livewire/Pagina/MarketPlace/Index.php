<?php

namespace App\Livewire\Pagina\MarketPlace;

use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\Musica;
use App\Models\Carrinho;
use App\Models\DetalheCarrinho;
use App\Models\Wishlist;
use App\Models\DetalheWishlist;
use Illuminate\Support\Facades\Auth;

class Index extends Component
{public $wishlistIds = [];


    public function loadWishlist()
{
    // Fetch the musica_ids from the detalhe_wishlists table
    $this->wishlistIds = DetalheWishlist::whereHas('wishlist', function($query) {
        $query->where('user_id', Auth::id());
    })->pluck('musica_id')->toArray();
}

    public function toggleWishlist($musicaId)
    {
        if (Auth::check()) {
            // Get or create the user's wishlist
            $wishlist = Wishlist::firstOrCreate(['user_id' => Auth::id()]);

            // Check if the music already exists in 'detalhe_wishlists'
            $detalhe = $wishlist->detalhes()->where('musica_id', $musicaId)->first();

            if ($detalhe) {
                // If the music exists, delete it from 'detalhe_wishlists'
                $detalhe->delete();
            } else {
                // If the music doesn't exist, add it to 'detalhe_wishlists'
                $wishlist->detalhes()->create(['musica_id' => $musicaId]);
            }

            // Get the updated list of music IDs in the wishlist from 'detalhe_wishlists'
            $this->wishlist = $wishlist->detalhes()->pluck('musica_id')->toArray();
        } else {
            // For non-authenticated users, use the session-based wishlist
            $wishlist = session()->get('wishlist', []);
            if (in_array($musicaId, $wishlist)) {
                $wishlist = array_diff($wishlist, [$musicaId]);
            } else {
                $wishlist[] = $musicaId;
            }
            session()->put('wishlist', $wishlist);
            $this->wishlist = $wishlist;
        }
    }
    #[Layout('layout.front')]
    public function render()
    {
        $this->loadWishlist();
        $musicas = Musica::where('active', 1)->get(); // Only get active songs
        return view('pagina.market-place.index', [
            'musicas' => $musicas,
            'wishlistIds' => $this->wishlistIds, // Pass this to the Blade view
        ]);
    }

    public function adicionarMusica($musicaId)
    {
        $user = Auth::user();
        $carrinho = Carrinho::firstOrCreate(['user_id' => $user->id]);

        $item = DetalheCarrinho::where('carrinho_id', $carrinho->id)
                               ->where('musica_id', $musicaId)
                               ->first();

        if ($item) {
            $item->increment('quantidade');
        } else {
            DetalheCarrinho::create([
                'carrinho_id' => $carrinho->id,
                'musica_id' => $musicaId,
                'quantidade' => 1,
            ]);
        }

        session()->flash('success', 'Música adicionada ao carrinho!');
    }
}

