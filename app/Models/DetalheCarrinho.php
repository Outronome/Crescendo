<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetalheCarrinho extends Model
{
    protected $fillable = [
        'carrinho_id',
        'musica_id',
        'quantidade',
    ];
}
