<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonWorkForce extends Model
{
    protected $table = 'person_work_force';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_user','nombre', 'cedula', 'direccion','telefono','cargo','fecha_ingreso'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
