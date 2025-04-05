<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WishlistMusica extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'musica_id'];

    public function musica()
    {
        return $this->belongsTo(Musica::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
