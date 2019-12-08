<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostVote extends Model
{
    //
    protected $fillable = ['users_id', 'pulicaciones_id','vote'];

    public function publicaciones()
    {
        return $this->belongsTo(Publicaciones::class);
    }
}
