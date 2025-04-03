<?php

namespace App\Livewire\Pagina\Wishlist;

use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\Wishlist;
use App\Models\Musica;
use Illuminate\Support\Facades\Auth;

class Index extends Component
{
    public $wishlist;

    public function mount()
    {
        if (Auth::check()) {
            $this->wishlist = Wishlist::where('user_id', Auth::id())->pluck('musica_id')->toArray();
        } else {
            $this->wishlist = session()->get('wishlist', []);
        }
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
        $musicas = Musica::all();
        return view('pagina.wishlist.index',compact('musicas'));
    }
}
