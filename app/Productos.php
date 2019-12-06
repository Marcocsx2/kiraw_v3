<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    //
    public function productos()
    {
        return $this->belongsToMany(User::class, 'detalle_facturas', 'productos_id', 'users_id');
    }
}
