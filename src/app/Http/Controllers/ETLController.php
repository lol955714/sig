<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Marquine\Etl\Etl;
use Illuminate\Support\Facades\Auth;

class EtlController extends Controller
{

    public function etl()
    {
        $usuarios = Auth::user();
        return view('etl.etl',['usuarios' => $usuarios]);
    }


    public function store(Request $request)
    {
        $categorias=[
            'table'=>'CategoriaArticulo',
            'columns'=>['idCategoria']
        ];
        $articulos=[
            'table'=>'Articulo',
            'columns'=>['idArticulo','idCategoria']
        ];
        $usuarios=[
            'table'=>'Usuario',
            'columns'=>['id_usuario','nombre_usuario','nombres','apellidos','idRol']
        ];
        $roles=[
            'table'=>'Rol',
            'columns'=>['id_rol','rol']
        ];
        $tipo_reportes=[
            'table'=>'TipoReporte',
            'columns'=>['id_tipo','reporte']
        ];
        $bitacoras=[
            'table'=>'Bitacora',
            'columns'=>['id','bitacora']
        ];
        $linea_detalles=[
            'table'=>'LineaDetalle',
            'columns'=>['id','linea_detalle']
        ];
        $facturas=[
            'table'=>'Factura',
            'columns'=>['id','factura']
        ];
        $rentas=[
            'table'=>'Renta',
            'columns'=>['id','renta']
        ];

        $fields=[
            $usuarios,
            $categorias,
            $articulos,
            $roles,
            $tipo_reportes,
            $bitacoras,
            $linea_detalles,
            $facturas,
            $rentas,
        ];
        $array_inverso=array_reverse($fields);
        foreach($array_inverso as $column){
            DB::table('gerenciales_'.$column['table'])->delete();
        }
        //Llenarlo e imprimirlo
        $array=[];
        $target=[
            'connection'=>'mysql',
            'timestamps'=>true,
        ];

        foreach ($fields as $column) {
            $etl = new Etl;
            $source=[
                'connection'=>'transaccional',
                'columns'=>$column['columns'],
            ];
            try {
                //code...
                $query=$etl->extract('table',$column['table'],$source)
                ->load('insert','gerenciales_'.$column['table'],$target)
                ->toArray();

                array_push($array,$query);
            } catch (\Throwable $th) {
                //throw $th;
                return response()->json($th,500);
            }


        }
        return response()->json([$array,$request]);
    }

}
