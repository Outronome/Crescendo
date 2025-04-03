<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WishlistMusica extends Model
{
    protected $fillable = [
        'wishlist_id',
        'musica_id',
    ];
}
