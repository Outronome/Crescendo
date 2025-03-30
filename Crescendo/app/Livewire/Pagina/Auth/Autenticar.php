<?php

namespace App\Livewire\Pagina\Auth;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Autenticar extends Component
{
    #[Layout('layout.front')]

    #[Validate('required|min:8|email')]
    public $email;
    //#[Validate('required|min:16|email|string')]
    public $password;

    public function autenticar(){
       
        
      $user = User::where('email', $this->email)->first();
      if (!$user) {   
          dd('i am here');
          return redirect()->back()->withErrors(['email' => 'Invalid login credentials']);
      }
      if ($user && Hash::check($this->password, $user->password)) {
          Auth::loginUsingId($user->id);
          //dependendo das permissões para onde vai o utilizador
          return redirect('/');
      }else {
          return redirect()->back()->withErrors(['password' => 'Invalid login credentials']);
      }

  }

    public function render()
    {
        return view('pagina.auth.autenticar');
    }
}
