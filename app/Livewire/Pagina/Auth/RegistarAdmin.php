<?php

namespace App\Livewire\Pagina\Auth;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use \App\Models\Carrinho; 
use \App\Models\Wishlist; 
use Livewire\Component;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Notifications\CustomEmailVerification;

class RegistarAdmin extends Component
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
    private $selecionadas = [];
    public $roles;
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
        Wishlist::create([
            'user_id' => $user->id,
        ]);
        /*$this->selecionadas = array_unique($this->selecionadas);
        dump($this->selecionadas);
        foreach ($this->selecionadas as $permissao) {
            $user->givePermissionTo($permissao);
        }*/
        session()->flash('info', 'Verifique o email introduzido e faça a verificação do email.');
        $user->notify(new CustomEmailVerification());
        //$user->sendEmailVerificationNotification();
    }
    /*public function selecionarPermissoes($id_permissao)
    {
        array_push($this->selecionadas, "$id_permissao");
        
    
        // Para fins de depuração, você pode verificar o estado atual das permissões
        dump($this->selecionadas);
    }*/

    public function render()
    {        
        //$this->roles = Role::with('permissions')->get();
        return view('pagina.auth.registar-admin');
        
    }
}
