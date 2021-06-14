<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Http\Controllers\EncryptAES;

//para hash del password
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	User::create(['nombre_usuario' => 'jefe',
    		'password' => Hash::make('admin'),
    		'nombres' => 'Jefe',
    		'apellidos' => 'XX',
    		'id_rol' => '1',
    	]);

    	User::create(['nombre_usuario' => 'gerente',
    		'password' => Hash::make('admin'),
    		'nombres' => 'Gerente',
    		'apellidos' => 'XX',
    		'id_rol' => '2',
    	]);

    	User::create(['nombre_usuario' => 'usuario',
    		'password' => Hash::make('admin'),
    		'nombres' => 'Usuario',
    		'apellidos' => 'XX',
    		'id_rol' => '3',
    	]);
    }
}
