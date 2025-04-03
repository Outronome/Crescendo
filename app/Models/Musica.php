<?php

namespace App\Models;

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
}
