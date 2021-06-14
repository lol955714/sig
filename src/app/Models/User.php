<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Coordinacion;
use App\Models\Area;
use App\Models\Rol;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */


    protected $table='usuarios';

    protected $primaryKey = 'id_usuario';

    protected $fillable = [
        'nombre_usuario', 'password', 'nombres','apellidos','cargo','id_rol','id_coord','id_area'
    ];

    public function rol(){
        return $this->belongsTo(Rol::class, 'id_rol','id_rol');
    }

    public function coordinacion(){
        return $this->belongsTo(Coordinacion::class, 'id_coord','id_coord');
    }

    public function area(){
        return $this->belongsTo(Area::class, 'id_area','id_area');
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
}
