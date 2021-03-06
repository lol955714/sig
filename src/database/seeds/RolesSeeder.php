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
        Rol::create(['nombre_rol' => 'administrador',]);
        Rol::create(['nombre_rol' => 'tactico',]);
        Rol::create(['nombre_rol' => 'estrategico',]);
    }
}
