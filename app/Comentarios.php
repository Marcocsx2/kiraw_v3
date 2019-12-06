<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentarios extends Model
{
    //
    public function publicaciones()
    {
        return $this->belongsTo(Publicaciones::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }

}
