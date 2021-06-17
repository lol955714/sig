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

    	User::create(['nombre_usuario' => 'jose.hernandez',
    		'password' => Hash::make('admin'),
    		'nombres' => 'José Antony',
    		'apellidos' => 'Jiménez Hernández',
    		'id_rol' => '1',
    	]);

    	User::create(['nombre_usuario' => 'william.lopez',
    		'password' => Hash::make('admin'),
    		'nombres' => 'William Joel',
    		'apellidos' => 'Lopez Díaz',
    		'id_rol' => '2',
    	]);

    	User::create(['nombre_usuario' => 'jose.rivas',
    		'password' => Hash::make('admin'),
    		'nombres' => 'José Alberto',
    		'apellidos' => 'Rivas Lopez',
    		'id_rol' => '3',
    	]);
    }
}
