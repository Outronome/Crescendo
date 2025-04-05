<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetalheWishlist extends Model
{
    protected $fillable = [
        'wishlist_id',
        'musica_id',
    ];

    public function wishlist()
    {
        return $this->belongsTo(Wishlist::class);
    }

    // Relationship to 'musicas' table
    public function musica()
    {
        return $this->belongsTo(Musica::class);
    }
}
