<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Rol;

class tacticosController extends Controller
{

    function margen_utilidad(){
        $usuarios = Auth::user();
        return view('reportes-tacticos.margen-utilidad',['usuarios' => $usuarios]);
    }

    function ventas_categoria(){
        $usuarios = Auth::user();
        return view('reportes-tacticos.ventas-por-categoria',['usuarios' => $usuarios]);
    }

    function rotacion_inventario(){
        $usuarios = Auth::user();
        return view('reportes-tacticos.rotacion-de-inventario',['usuarios' => $usuarios]);
    }

    function productos_mas_vendidos(){
        $usuarios = Auth::user();
        return view('reportes-tacticos.productos-mas-vendidos-por-categoria',['usuarios' => $usuarios]);
    }
}
