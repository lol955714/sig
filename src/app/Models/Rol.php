<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table='roles';
    protected $primaryKey='id_rol';

    protected $fillable = ['nombre_rol'];
	//se usa para cuando la tabla no tiene TimeStamp (created_at updated_at)
    public $timestamps = false;
}
