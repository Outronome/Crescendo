<?php

namespace App\Livewire\Pagina\Auth;

use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
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
    #[Validate('nullable|string')]
    public $bio;
    #[Validate('image|max:1024')]
    public $profile_pic;
    public function registarArtista(){
        // Validação
        $this->validate();
        
        $caminho = $this->photo->store(path: 'photos');
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'bio' => $this->bio,
            'profile_pic' => basename($caminho),
        ]);
        
    
    
        // Fazer login do usuário automaticamente
        //auth()->login($user);
    
        // Redirecionar para a página inicial
        $user->notify(new CustomEmailVerification());
        return redirect()->route('login');

    }
    #[Layout('layout.front')]
    public function render()
    {
        return view('auth.register-artist');
    }
}
