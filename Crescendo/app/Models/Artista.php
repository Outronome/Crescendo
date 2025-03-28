<?php

namespace App\Models;
use App\Http\Controllers\ArtistController;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artista extends Model
{
    use HasFactory;

    // Define the table associated with the model
    protected $table = 'artistas';

    // Define which fields are mass assignable
    protected $fillable = [
        'user_id',        // Foreign key to the users table
        'bio',            // Artist's biography
        'profile_pic',    // Path to the profile picture
    ];

    // Define the relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
