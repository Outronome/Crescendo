<?php

namespace App\Livewire\Pagina\Auth;

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use \App\Models\Carrinho; 
use \App\Models\Wishlist; 
use Illuminate\Support\Facades\Hash;
use App\Notifications\CustomEmailVerification;

class RegistarArtista extends Component

{
    
    use WithFileUploads;   
    #[Validate('required|string|max:255')]
    public $name;
    #[Validate('required|email|unique:users,email')]
    public $email;
    #[Validate('required|string|min:8|confirmed')]
    public $password;
    #[Validate('required|string|min:8')]
    public $password_confirmation;
    #[Validate('required|string')]
    public $bio;
    #[Validate('image|max:1024')]
    public $profile_pic;
    public $imageUrl;
    public function registarArtista(){
        // Validação
        
        $this->validate();  
        $caminho = $this->profile_pic->store('photos', 'public');
        session()->flash('info', 'Imagem carregada com sucesso!');
        $this->imageUrl = asset('storage/' . $caminho);
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'bio' => $this->bio,
            'profile_pic' => $caminho,
        ]);
        Carrinho::create([
            'user_id' => $user->id,
        ]);
        Wishlist::create([
            'user_id' => $user->id,
        ]);
        
        // Fazer login do usuário automaticamente
        //auth()->login($user);
    
        // Redirecionar para a página inicial
        session()->flash('info', 'Verifique o email introduzido e faça a verificação do email.');
        $user->notify(new CustomEmailVerification());

    }
    #[Layout('layout.front')]
    public function render()
    {
        return view('pagina.auth.registar-artista');
    }
}
