<?php

use Illuminate\Database\Seeder;
use App\Models\Rol;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rol::create(['nombre_rol' => 'Jefe',]);
        Rol::create(['nombre_rol' => 'Gerente',]);
        Rol::create(['nombre_rol' => 'Usuario',]);
    }
}
