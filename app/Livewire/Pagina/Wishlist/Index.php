<?php

namespace App\Livewire\Pagina\Wishlist;

use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\Wishlist;
use App\Models\Musica;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class Index extends Component
{
    public $wishlist;
    

     public function mount()
    {
        // Assuming you want to get the musics from the authenticated user
        $this->musicas = auth()->user()->wishlist;  // Access the relationship to get the musics
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





    public function removeFromWishlist($musicaId)
{
  
    $user = auth()->user();

    
    $user->wishlist()->detach($musicaId);

   
    $this->musicas = $user->wishlist;
}

    #[Layout('layout.front')]
    public function render()
    {
        $musicas = auth()->user()->wishlist;
        return view('pagina.wishlist.index',compact('musicas'));
    }
}
