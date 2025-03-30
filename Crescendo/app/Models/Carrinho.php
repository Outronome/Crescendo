<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\DetalheCarrinho;

class Carrinho extends Model
{
    protected $fillable = [
        'user_id',
    ];

    public function detalhesCarrinho(): HasMany
    {
        return $this->hasMany(DetalheCarrinho::class);
    }

}
