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
    #[Validate('required|string|email|max:255|unique:users,email')]
    public $email;
    #[Validate('nullable|confirmed|min:8')]
    public $password;
    
    public function mount(){
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
        $this->validate();

        // Update the user information
        $user = User::where('id', Auth::id())->first();
        $user->name = $this->name;
        $user->email = $this->email;

        // If a password is provided, update it
        if ($this->password!=null) {
            $user->password = Hash::make($this->password);
        }

        $user->save();

        // Redirect back with a success message
        return redirect()->route('admin.profile')->with('success', 'Profile updated successfully');
    }
    // Método para alternar a visibilidade do formulário
    public function toggleForm()
    {
        $this->showForm = !$this->showForm;
    }
}

