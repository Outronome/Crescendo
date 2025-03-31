<?php

namespace App\Livewire\Pagina\Auth;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Illuminate\Http\Request;
use Laravel\Fortify\Http\Controllers\PasswordResetLinkController;
use Livewire\Component;

class Esqueci extends Component
{
    #[Layout('layout.front')]
    
    #[Validate('required|string|email|max:255')]
    public $email;
    
    
    public function esqueci()
    {
        $passwordResetController = new PasswordResetLinkController();
        $request = new Request(['email' => $this->email]);

        return $passwordResetController->store($request);
    }

    public function render()
    {
        return view('pagina.auth.esqueci');
    }
}
