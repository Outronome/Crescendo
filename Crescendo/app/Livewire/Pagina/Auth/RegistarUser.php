<?php

namespace App\Livewire\Pagina\Auth;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class RegistarUser extends Component
{
    #[Layout('layout.front')]
    #[Validate('required|min:8|string')]
    public $user_name;
    #[Validate('required|min:8|email')]
    public $email;
    #[Validate('required|min:8|string|confirmed:password_confirm')]
    public $password;
    #[Validate('required|min:8|string')]
    public $password_confirmation;

    public function registar()
    {
        //verificar se as palavras passes são iguais e se forem criar o user
        $this->validate();
        $user = User::where('email', $this->email)->first();
        if (!$user) {
            dd('i am here');
            return redirect()->back()->withErrors(['email' => 'Invalid login credentials']);
        }
        if ($user && Hash::check($this->password, $user->password)) {
            Auth::loginUsingId($user->id);
            //dependendo das permissões para onde vai o utilizador
            return redirect('/autenticar');
        } else {
            return redirect()->back()->withErrors(['password' => 'Invalid login credentials']);
        }
    }

    public function render()
    {
        return view('pagina.auth.autenticar');
    }
}
