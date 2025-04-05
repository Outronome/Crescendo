<?php

namespace App\Livewire\Pagina\GestaoUser\Componente;

use Livewire\Component;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class Permissoes extends Component
{
    public $permissoes;

    public $roles;

    public $max_permissoes;

    public $utilizador_id;

    public $caixaselecionada = [];

    public $cargo_selecionado = [];

    public $role_id;

    public function fecharModalAtribuicaoPermissao()
    {
        $this->dispatch('fecharModalAtribuicaoPermissao', $this->utilizador_id);
    }

    public function selecionarPermissoes($role_id)
    {
        $role = Role::with('permissions')->find($role_id);

        $permissoes_cargo_selecionadas = $role->permissions->pluck('id')->toArray();

        $intersecao_permissoes = array_intersect($this->caixaselecionada, $permissoes_cargo_selecionadas);

        $todas_permissoes_cargo_selecionadas = count($permissoes_cargo_selecionadas) === count($intersecao_permissoes);

        if($todas_permissoes_cargo_selecionadas)
        {
            $this->caixaselecionada = array_values(array_diff($this->caixaselecionada, $role->permissions->pluck('id')->toArray()));
        }
        else
        {
            $this->caixaselecionada = array_unique([...$this->caixaselecionada, ...$role->permissions->pluck('id')->toArray()]);
        }

        if(count($intersecao_permissoes) < count($permissoes_cargo_selecionadas))
        {
            $this->caixaselecionada = array_unique(array_merge($this->caixaselecionada, $permissoes_cargo_selecionadas));
        }
    }

    public function atualizarPermissoesCargos($role_id)
    {
        $role = Role::with('permissions')->find($role_id);

        $all_roles_permissions_id = $role->permissions->pluck('id')->toArray();

        $intersecao_permissoes = array_intersect($this->caixaselecionada, $all_roles_permissions_id);

        if(count($intersecao_permissoes) !== count($all_roles_permissions_id))
        {
            $this->cargo_selecionado = array_diff($this->cargo_selecionado, [$role_id]);
        }
        else
        {
            $this->cargo_selecionado = array_unique([...$this->cargo_selecionado, ...[$role_id]]);
        }
    }

    public function atribuirPermissaoUtilizador()
    {
        $utilizador = User::find($this->utilizador_id);

        for($i = 0; $i < count($this->caixaselecionada); $i++)
        {
            $permission = Permission::find($this->caixaselecionada[$i]);

            /*PermissaoUtilizadores::create([
                'permissao_id' => $permission->id,
                'utilizador_id' => $utilizador->id,
            ]);*/

            $utilizador->givePermissionTo([$permission]);
        }
    }

    public function verificarPermissoesCargos($utilizador_id, $role_id)
    {
        $user = User::find($utilizador_id);

        $role = Role::with('permissions')->find($role_id);

        $todas_permissoes_cargo = $role->permissions->pluck('id')->toArray();

        $permissoes_utilizador = $user->permissions->pluck('id')->toArray();

        return empty(array_diff($todas_permissoes_cargo, $permissoes_utilizador));
    }

    /*public function mount($utilizador_id)
    {
        dd();
        $this->roles = Role::all();

        $this->permissoes = Permission::all();

        $this->max_permissoes = $this->roles->map(fn($role) => $role->permissions->count())->max();

        foreach($this->roles as $role)
        {
            $this->role_id = $role->id;
        }

        $this->utilizador_id = $utilizador_id;

        $user = User::with(['permissions', 'roles'])->find($this->utilizador_id);

        $this->caixaselecionada = $user->permissions->pluck('id')->toArray();

        foreach(Role::all() as $role)
        {
            if($this->verificarPermissoesCargos($this->utilizador_id, $role->id))
            {
                $this->cargo_selecionado[] = $role->id;
            }
        }
    }*/

    public function render()
    {   
        $this->roles = Role::with('permissions')->get();
        
        return view('pagina.gestao-user.componente.permissoes');
        
    }
}