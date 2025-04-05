<?php

namespace App\Livewire\Pagina\Wishlist;

use Livewire\Component;
use App\Models\Wishlist;
use App\Models\Musica;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use App\Models\DetalheWishlist;

class Index extends Component
{
    public $wishlist;

    public function loadWishlist()
    {
        // Fetch the musica_ids from the detalhe_wishlists table
        $this->wishlistIds = DetalheWishlist::whereHas('wishlist', function($query) {
            $query->where('user_id', Auth::id());
        })->pluck('musica_id')->toArray();
    }

    public function mount()
    {
        // Get the current user's wishlist music items from the 'detalhe_wishlists' table
        if (Auth::check()) {
            // Using the relationship defined in the Wishlist model to get the musics
           $this->wishlist = Auth::user()->wishlist->detalhes()->pluck('musica_id')->toArray();
        } else {
            // If the user is not authenticated, get the wishlist from the session
            $this->wishlist = session()->get('wishlist', []);
        }
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

    public function removeFromWishlist($musicaId)
{
    // First, we need to find the 'detalhe_wishlists' entry for the given 'musica_id' and the authenticated user
    $detalheWishlist = DetalheWishlist::whereHas('wishlist', function($query) {
        $query->where('user_id', Auth::id());
    })->where('musica_id', $musicaId)->first();
    
    // If it exists, delete the record
    if ($detalheWishlist) {
        $detalheWishlist->delete();
    }

    // Update the wishlist after removing the music
    $this->loadWishlist(); // Refresh the wishlist data after removal
}

    #[Layout('layout.front')]
    public function render()
    {
        // Fetch the musics using the 'musicas' relationship
        $musicas = auth()->user()->wishlist->musicas;
        return view('pagina.wishlist.index', compact('musicas'));
    }
}
