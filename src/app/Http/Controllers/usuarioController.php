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
    public function __construct()
    {
        $this->middleware('auth');
    }

 public function perfil()
 {
    $usuarios = Auth::user();
    return view('usuario.perfil',['usuarios' => $usuarios]);
}


}
