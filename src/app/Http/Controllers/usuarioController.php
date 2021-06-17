<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Redirector;

use App\Models\User;
use App\Models\Rol;

use Illuminate\Support\Facades\Hash;



class usuarioController extends Controller
{

    protected $rules =[
        'nombre_usuario' => 'required',
        'password' => 'required',
        'nombres' => 'required',
        'apellidos' => 'required',
    ];


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function lista()
    {

        $usuarios = User::all();
        return view('usuario.lista',['usuarios' => $usuarios]);
    }

    public function bd()
    {

        $usuarios = User::all();
        return view('inicio.base-datos',['usuarios' => $usuarios]);
    }

    public function bitacora()
    {

        $usuarios = User::all();
        return view('usuario.bitacora',['usuarios' => $usuarios]);
    }



    public function perfil()
    {
        $usuarios = Auth::user();
        return view('usuario.perfil',['usuarios' => $usuarios]);
    }

    public function registrar()
    {
        $usuarios = Auth::user();
        return view('auth.registrar',['usuarios' => $usuarios]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), $this->rules);
        if ($validator->fails()) {
            Return Response::json(array('errors' => $validator->getMessageBag()->toArray()));
        }else{
            $usuario = new User();
            $usuario->nombre_usuario = $request->nombre_usuario;
            $usuario->password = Hash::make($request->password);
            $usuario->nombres = $request->nombres;
            $usuario->apellidos = $request->apellidos;
            $usuario->id_rol = $request->id_rol;
            $usuario->save();
            return redirect()->route('usuario.lista')->with('status', 'Usuario '.$request->nombre_usuario.' registrado existosamente');
        }
    }


}
