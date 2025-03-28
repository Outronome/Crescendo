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
        // Validação
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'bio' => 'nullable|string',
            'profile_pic' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        // Criar o usuário
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
    
        // Criar o artista
        $artist = Artista::create([
            'user_id' => $user->id,
            'bio' => $request->bio,
            'profile_pic' => $request->profile_pic ? $request->profile_pic->store('profile_pics', 'public') : null,
        ]);
    
        // Fazer login do usuário automaticamente
        auth()->login($user);
    
        // Redirecionar para a página inicial
        return redirect()->route('inicio'); 
    }
    
}
