<?php

namespace App;

use Illuminate\Foundation\Auth\Proveedor as Authenticatable;

class Proveedores extends Authenticatable
{
    //

    protected $guard = 'proveedor';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'pro_nombre','pro_descripcion','pro_fundacion','pro_telefono','pro_trabajadores', 'email', 'password','pro_imagen',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'pro_contraseña', 'remember_token',
    ];

    public function scopeName($query, $pro_nombre)
    {
        if($pro_nombre)
            return $query->where('pro_nombre', 'LIKE', "%$pro_nombre%");
    }
}
