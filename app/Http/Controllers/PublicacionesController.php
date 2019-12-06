<?php

namespace App\Http\Controllers;

use App\Comentarios;
use App\Proveedores;
use App\Publicaciones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PublicacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $data = Publicaciones::orderBy('id','DESC')->select('publicaciones.id as pid','proveedores.pro_imagen','proveedores.id','proveedores.pro_nombre',
        'publicaciones.publi_imagen','publicaciones.publi_titulo','publicaciones.publi_descripcion')
                ->join('proveedores', 'proveedores.id', '=', 'publicaciones.proveedores_id')
                ->get();

        return view('Inicio.inicio')->with('data', $data);
                                    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $publicaciones = Publicaciones::orderBy('id','DESC')->select('publicaciones.id as pid','proveedores.pro_imagen','proveedores.id','proveedores.pro_nombre',
        'publicaciones.publi_imagen','publicaciones.publi_titulo','publicaciones.publi_descripcion')
                ->where('publicaciones.id',$id)
                ->join('proveedores', 'proveedores.id', '=', 'publicaciones.proveedores_id')
                ->get();

        $comentarios = DB::select("call comentarios_publicacion($id)");
        return view('Publicaciones.show')-> with('comentarios',$comentarios)->with('publicaciones',$publicaciones);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $publicacion = Publicaciones::find($id);
        return view('Publicaciones.edit')-> with('publicacion',$publicacion);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
