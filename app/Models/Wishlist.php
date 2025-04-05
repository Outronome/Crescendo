<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DetalheWishlist;

class Wishlist extends Model
{
    use HasFactory;

    protected $fillable = ['user_id',];

    public function detalhes()
    {
        return $this->hasMany(DetalheWishlist::class);
    }

    // Relationship to 'musicas' table through 'detalhe_wishlists'
    public function musicas()
    {
        return $this->hasManyThrough(Musica::class, DetalheWishlist::class, 'wishlist_id', 'id', 'id', 'musica_id');
    }

}
