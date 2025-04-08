<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CompraMusica extends Model
{
    use HasFactory;

    protected $table = 'compra_musica';

    protected $fillable = [
        'compra_id',
        'musica_id',
        'quantidade',
    ];

    public function compra()
    {
        return $this->belongsTo(Compra::class);
    }

    public function musica()
    {
        return $this->belongsTo(Musica::class);
    }
}
