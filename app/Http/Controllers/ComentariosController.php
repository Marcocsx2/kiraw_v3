<?php

namespace App\Http\Controllers;

use App\Comentarios;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Validator;

class ComentariosController extends Controller
{
    //
    public function create(Request $request, $publi_id)
    {
        //validar la data enviada
        // Persistir el comentario

        $comentarios = new Comentarios();

        $comentarios -> comentario = $request->get('comentario');
        $comentarios -> publicacion_id = $publi_id;
        $comentarios -> users_id = auth()->user()->id;
        $comentarios -> save();
        // Redireccionar a la publicacion
        // return $comentarios;
        return redirect()->to('publicaciones')->with('Comentarios', $comentarios);
    }
}
