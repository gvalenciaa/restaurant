<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonStudent extends Model
{
    protected $table = 'person_studen';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_user','nombre', 'cedula', 'direccion','telefono','codigo','tarifa'
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
