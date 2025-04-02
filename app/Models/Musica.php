<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Musica extends Model
{
    protected $fillable = [
        'artist_id',
        'title',
        'price',
        'genero',
        'file_photo',
        'file_url',
    ];
}
