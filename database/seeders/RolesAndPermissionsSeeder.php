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
        // Criar permissão
        /*$permission =*/ Permission::create(['name' => 'criar publicacao']);
        /*$permission =*/ Permission::create(['name' => 'editar publicacao']);
        /*$permission =*/ Permission::create(['name' => 'moderar publicacao']);
        /*$permission =*/ Permission::create(['name' => 'eliminar publicacao']);
        /*$permission =*/ Permission::create(['name' => 'criar musica']);
        /*$permission =*/ Permission::create(['name' => 'editar musica']);
        /*$permission =*/ Permission::create(['name' => 'moderar musica']);
        /*$permission =*/ Permission::create(['name' => 'eliminar musica']);
        /*$permission =*/ Permission::create(['name' => 'moderar comentario']);
        /*$permission =*/ Permission::create(['name' => 'moderar utilizador']);
        /*$permission =*/ Permission::create(['name' => 'criar administrador']);

        // Criar role
        //$role = Role::create(['name' => 'writer']);

        // Associar permissão à role
        //$role->givePermissionTo($permission);
    }
}
