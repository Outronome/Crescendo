<?php

namespace App\Livewire\Pagina\GestaoUser;

use Livewire\Component;
use Livewire\Attributes\Layout;
use App\Models\User;
use Livewire\Attributes\On;
use Spatie\Permission\Models\Role;

class Index extends Component
{
    public $modal_atribuicao_utilizadores = false;
    public $utilizadores;
    public $pesquisar_utilizador;
    /*

    

    

    public $utilizador_id;
    
    public $role_id;

    #[On('fecharModalAtribuicaoPermissao')]
    public function modalAtribuicaoPermissao($utilizador_id)
    {
        
        $roles = Role::all();

        $this->utilizador_id = $utilizador_id;

        for($i = 0; $i < count($roles); $i++)
        {
            $this->role_id = $roles[$i]->id;
        }

        $this->modal_atribuicao_utilizadores = !$this->modal_atribuicao_utilizadores;
    }

    public function ativarDesativarUtilizador($ativo, $utilizador_id)
    {
        $utilizador = User::find($utilizador_id);

        if($ativo == 0 && $utilizador_id)
        {
            $utilizador->ativo = $ativo = 1;

            $utilizador->save();
        }
        elseif($utilizador_id)
        {
            $utilizador->ativo = $ativo = 0;

            $utilizador->save();
        }
    }*/
    public function criarAdmin(){
        return redirect()->route("registar-admin");
    }
    #[Layout('layout.front')]
    public function render()
    {
        if($this->pesquisar_utilizador)
        {
            $this->utilizadores = User::where('name', 'like', '%' . $this->pesquisar_utilizador . '%')
            ->orWhere('email', 'like', '%' .  $this->pesquisar_utilizador . '%')->get();

        }
        else
        {
            $this->utilizadores = User::all();
        }   

        return view('pagina.gestao-user.index');
    }
}
