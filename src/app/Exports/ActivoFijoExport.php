<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;

use App\Models\ActivoFijo;

class ActivoFijoExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
    	/*si fuera con Eloquent
    	return ActivoFijo::all();
    	return DB::table('activos_fijos')->get(); */
    	//$activos = DB::select('select id_af from activos_fijos');

    	$activos = DB::select('select  af.codigo_af, af.nombre_af, af.marca_af, af.modelo_af, af.serie_af, c.color_af, f.nombre_fuente, af.fecha_adq_af, af.valor_adq_af, af.valor_actual_af, e.estado_af,usuario.nombres, usuario.apellidos, u.ubicacion_af, coord.nombre_coord, a.nombre_area from activos_fijos as af inner join colores_af as c  on  c.id_color = af.id_color inner join fuentes_af as f on f.id_fuente = af.id_fuente inner join coordinaciones as coord on coord.id_coord = af.id_coord inner join areas as a on a.id_area = af.id_area inner join ubicaciones_af as u on u.id_ubicacion = af.id_ubicacion inner join estados_af as e on e.id_estado = af.id_estado inner join usuarios as usuario on usuario.id_usuario = af.persona_responsable');

        //pasar a colección el array de activos
    	$coleccionActivos = collect($activos);
    	return $coleccionActivos;
    }
}
