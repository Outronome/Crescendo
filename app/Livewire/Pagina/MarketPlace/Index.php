<?php

namespace App\Livewire\Pagina\MarketPlace;

use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\Musica;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;

class Index extends Component
{public $wishlistIds = [];


    public function loadWishlist()
    {
        $this->wishlistIds = Wishlist::where('user_id', Auth::id())->pluck('musica_id')->toArray();
    }

    public function toggleWishlist($musicaId)
    {
        if (Auth::check()) {
            $wishlistItem = Wishlist::where('user_id', Auth::id())->where('musica_id', $musicaId)->first();
            if ($wishlistItem) {
                $wishlistItem->delete();
            } else {
                Wishlist::create(['user_id' => Auth::id(), 'musica_id' => $musicaId]);
            }
            $this->wishlist = Wishlist::where('user_id', Auth::id())->pluck('musica_id')->toArray();
            $this->loadWishlist();
        } else {
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
}
