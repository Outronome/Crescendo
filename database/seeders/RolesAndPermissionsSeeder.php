<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissao_artista  = [
            'criar publicacao',
            'editar publicacao',
            'moderar publicacao',
            'eliminar publicacao',
            'criar musica',
            'editar musica',
            'eliminar musica'
            ];
        $permissao_admin = [
            'moderar musica',
            'moderar comentario',
            'moderar utilizador',
            'criar administrador'
        ];
        $permissoes = array_unique(array_merge($permissao_artista, $permissao_admin));
        
        // Criando permissões em massa
        foreach ($permissoes as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }
        
        // Criando o role 'artista'
        $artista = Role::firstOrCreate(['name' => 'artista']);
        $admin = Role::firstOrCreate(['name' => 'admin']);
        
        // Atribuindo permissões ao role 'artista'
        $artista->givePermissionTo($permissao_artista);
        $admin->givePermissionTo($permissao_admin);
    }
}
