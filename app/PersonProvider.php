<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonProvider extends Model
{

    protected $table = 'person_provider';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_user','nombre', 'cedula', 'direccion','telefono','id_proveedor'
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
