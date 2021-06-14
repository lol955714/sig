<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth;
use AuthenticatesUsers;
use App\Models\User;

//para recibir los datos como request, nueva forma
use Illuminate\Http\Request;


class LoginController extends Controller
{

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $mensajesError= [
            'password.min' =>"Su contraseña tiene al menos 8 carácteres"
        ];
        $credenciales = $this->validate(request(), [
            'nombre_usuario' => 'required|string',
            'password'=> 'required|string'

        ],$mensajesError);

        //variable para capturar el nombre de usuario ingresado
        $findUser = User::where('nombre_usuario','=',$request->nombre_usuario)->first();

        if($findUser == null){
            //return error de usuario
            return back()->withErrors(['usuario'=>trans('El usuario ingresado no se encuentra en <br> nuestros registros')])->withInput();
        }else if(Auth::attempt($credenciales)){
            return redirect()->route('inicio.admin');
        }
        //return error de password;
        return back()->withErrors(['password'=>trans('La contraseña ingresada es incorrecta')])->withInput();
    }

    public function logout(){
        Auth::logout();

        return redirect('/');
    }
}
