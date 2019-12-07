<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publicaciones extends Model
{
    //

    protected $fillable = ['publi_imagen','publi_titulo','publi_descripcion','proveedores_id'];

    public function comentarios()
    {
        return $this->hasMany(Comentarios::class)->orderBy('id','desc');
    }
}
