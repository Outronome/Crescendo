<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $fillable = [
        'user_id',
        'musica_id',
        'rating',
        'comment',
    ];
}
