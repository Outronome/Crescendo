<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TemasMusica extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'musica_id',
        'tema_id',
    ];
}
