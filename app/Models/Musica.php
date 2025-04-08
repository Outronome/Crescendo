<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Musica extends Model
{
    protected $fillable = [
        'artist_id',
        'title',
        'price',
        'genero',
        'file_photo',
        'active',
        'file_url',
    ];

    public function artist(): HasMany{
        //return $this->hasMany(User::class);
        return $this->hasMany(User::class, 'id', 'artista_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'wishlists', 'musica_id', 'user_id')->withTimestamps();
    }

    public function detalhes()
    {
        return $this->hasMany(DetalheWishlist::class);
    }

    public function detalhesCarrinho()
    {
        return $this->hasMany(DetalheCarrinho::class);
    }
}
