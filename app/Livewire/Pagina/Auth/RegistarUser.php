<?php

namespace App\Livewire\Pagina\Auth;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use \App\Models\Carrinho; 
use App\Notifications\CustomEmailVerification;

class RegistarUser extends Component
{
    #[Layout('layout.front')]
    #[Validate('required|string|max:255')]
    public $user_name;
    
    #[Validate('required|string|email|max:255|unique:users,email')]
    public $email;
    
    #[Validate('required|string|min:8|confirmed')]
    public $password;
    
    #[Validate('required|string|min:8')]
    public $password_confirmation;
    
    public function registar()
    {
        $this->validate();
    
        $user = User::create([
            'name' => $this->user_name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);
        Carrinho::create([
            'user_id' => $user->id,
        ]);

        session()->flash('info', 'Verifique o email introduzido e faça a verificação do email.');
        $user->notify(new CustomEmailVerification());
        //$user->sendEmailVerificationNotification();
    }

    public function render()
    {
        return view('pagina.auth.registar-user');
    }
}
