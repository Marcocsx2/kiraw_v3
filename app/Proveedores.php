<?php

namespace App;

use Illuminate\Foundation\Auth\Proveedor as Authenticatable;

class Proveedores extends Authenticatable
{
    //

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'pro_nombre', 'pro_correo', 'pro_contraseña',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'pro_contraseña', 'remember_token',
    ];
}
