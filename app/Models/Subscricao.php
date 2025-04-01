<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscricao extends Model
{
    protected $fillable = [
        'user_id',
        'tipo',
        'data_expiracao',
    ];
}
