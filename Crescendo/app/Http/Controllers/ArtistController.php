<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Artista;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
public function registerArtist(Request $request)
{
    // Validate the incoming request data
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|min:8|confirmed',
        'bio' => 'nullable|string',
        'profile_pic' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    // Step 1: Create the user
    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password), // Hash the password before storing
    ]);

    // Step 2: Create the artist
    $artist = Artista::create([
        'user_id' => $user->id,
        'bio' => $request->bio,
        'profile_pic' => $request->profile_pic ? $request->profile_pic->store('profile_pics', 'public') : null, // Store profile picture if provided
    ]);

    // Optionally, return a response or redirect
    return response()->json([
        'message' => 'Artist registered successfully!',
        'user' => $user,
        'artist' => $artist,
    ]);
}
}
