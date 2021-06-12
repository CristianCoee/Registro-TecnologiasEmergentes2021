<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class rolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol1 = rol::create(['name' => 'Admin']);
        $rol2 = rol::create(['name' => 'profesor']);
        $rol3 = rol::create(['name' => 'alumno']);

        Permission::create (['name' => 'home'])->syncRoles([$rol1, $rol2, $rol3]);

        Permission::create (['name' => 'alumnos']) syncRoles([$rol1, $rol2]);
        Permission::create (['name' => 'alumnos/create'])syncRoles([$rol1]);
        Permission::create (['name' => 'alumnos/edit'])syncRoles([$rol1]);
        Permission::create (['name' => 'alumnos/delete'])syncRoles([$rol1]);

        Permission::create (['name' => 'materias'])syncRoles([$rol1, $rol2]);
        Permission::create (['name' => 'materias/create'])syncRoles([$rol1, $rol2]);
        Permission::create (['name' => 'materias/edit'])syncRoles([$rol1, $rol2]);
        Permission::create (['name' => 'materias/delete'])syncRoles([$rol1, $rol2]);

        Permission::create (['name' => 'grados'])syncRoles([$rol1, $rol2]);
        Permission::create (['name' => 'grados/create'])syncRoles([$rol1]);
        Permission::create (['name' => 'grados/edit'])syncRoles([$rol1]);
        Permission::create (['name' => 'grados/delete'])syncRoles([$rol1]);

        Permission::create (['name' => 'profesores'])syncRoles([$rol1,$rol2]);
        Permission::create (['name' => 'profesores/create'])syncRoles([$rol1]);
        Permission::create (['name' => 'profesores/edit'])syncRoles([$rol1]);
        Permission::create (['name' => 'profesores/delete'])syncRoles([$rol1]);

        Permission::create (['name' => 'periodos'])syncRoles([$rol1, $rol2, $rol3]);
        Permission::create (['name' => 'periodos/create'])syncRoles([$rol1, $rol2]);
        Permission::create (['name' => 'periodos/edit'])syncRoles([$rol1, $rol2]);
        Permission::create (['name' => 'periodos/delete'])syncRoles([$rol1, $rol2]);

        Permission::create (['name' => 'calificaciones'])syncRoles([$rol1, $rol2, $rol3]);
        Permission::create (['name' => 'calificaciones/create'])syncRoles([$rol2]);
        Permission::create (['name' => 'calificaciones/edit'])syncRoles([$rol2]);
        Permission::create (['name' => 'calificaciones/delete'])syncRoles([$rol2]);
    }
}
