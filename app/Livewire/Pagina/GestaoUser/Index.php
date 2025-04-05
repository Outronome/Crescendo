<?php

namespace App\Livewire\Pagina\GestaoUser;

use Livewire\Component;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Livewire\Attributes\Layout;

class Index extends Component
{
    public $modal_atribuicao_utilizadores = false;
    public $utilizadores;
    public $pesquisar_utilizador;
    public $atribuir = false;
    public $user_id;
    public $roles;
    public $permissoes_atribuidas;

    // Método para adicionar/remover permissões
    public function selecionarPermissoes($nome_permissao, $checked)
    {
        // Busca o usuário
        $user = User::find($this->user_id);

        // Se a permissão não foi atribuída e o checkbox foi marcado
        if ($checked) {
            // Adiciona a permissão ao usuário
            $user->givePermissionTo($nome_permissao);
        } else {
            // Se o checkbox foi desmarcado, remove a permissão do usuário
            $user->revokePermissionTo($nome_permissao);
        }

        // Atualiza o array de permissões atribuídas
        $this->atualizarPermissoesAtribuidas($user);
    }

    // Atualiza o array de permissões atribuídas ao usuário
    public function atualizarPermissoesAtribuidas($user)
    {
        // Recupera as permissões atribuídas ao usuário
        $this->permissoes_atribuidas = $user->permissions->pluck('name')->toArray();
    }

    public function criarAdmin()
    {
        return redirect()->route("registar-admin");
    }

    // Método para editar permissões de um usuário
    public function editarPermissoes($id)
    {
        $this->user_id = $id;
        $this->atribuir = true;
        $user = User::with('permissions')->find($this->user_id);

        // Extrai as permissões atribuídas ao usuário
        $this->permissoes_atribuidas = $user->permissions->pluck('name')->toArray();

        // Recupera todas as permissões disponíveis
        $this->roles = Role::with('permissions')->get();
    }
    #[Layout('layout.front')]
    public function render()
    {
        if ($this->pesquisar_utilizador) {
            $this->utilizadores = User::where('name', 'like', '%' . $this->pesquisar_utilizador . '%')
                ->orWhere('email', 'like', '%' .  $this->pesquisar_utilizador . '%')->get();
        } else {
            $this->utilizadores = User::all();
        }

        return view('pagina.gestao-user.index');
    }
}