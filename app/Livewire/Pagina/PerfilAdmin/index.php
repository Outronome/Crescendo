<?php

namespace App\Livewire\Pagina\PerfilAdmin;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

use Livewire\Component;

class Index extends Component
{
    public $showForm = false; // Adiciona a propriedade para controlar a exibição do formulário
    #[Validate('required|string|max:255')]
    public $name;
    
    public $email;
    #[Validate('nullable|confirmed|min:8')]
    public $password;

    public $password_confirmation;
    
    public function mount(){
        
        if( Auth::user()==null)
        return redirect()->route('login');

      $this->name = Auth::user()->name;
      $this->email = Auth::user()->email;
    }

    


    #[Layout('layout.front')]
    public function render()
    {
        return view('pagina.perfil-admin.index');
    }
    public function update(){
        // Validate the incoming request
        $validatedData = $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . Auth::id(), // Exclude current user's email from uniqueness check
            'password' => 'nullable|min:8|confirmed',
            'password_confirmation' => 'nullable|min:8',
        ]);

        // Proceed to save user data after successful validation
        $user = User::find(Auth::id());
        $user->name = $this->name;
        $user->email = $this->email;

        // If password is provided, hash and update it
        if ($this->password) {
            $user->password = Hash::make($this->password);
        }

        $user->save();

        // Success message
        session()->flash('message', 'Profile updated successfully');
        
        // Redirect or reload page
        return redirect()->route('perfil.admin');
    }
    // Método para alternar a visibilidade do formulário
    public function toggleForm()
    {
        $this->showForm = !$this->showForm;
    }
}

