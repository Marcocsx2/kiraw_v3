<?php

namespace App\Http\Controllers;

use App\Proveedores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompañiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $pro_nombre = $request->get('pro_nombre');
        $contador = Proveedores::all();
        $compañias = Proveedores::orderBy('id', 'DESC')
                        ->where('pro_nombre', 'LIKE', "%$pro_nombre%")
                        ->paginate(4);

        return view('Compañia.index')->with( 'compañias', $compañias)->with('contador', $contador);
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
        $compañias = DB::select("call proveedoresId($id);");
        return view('Compañia.show')->with('compañias', $compañias);
        // return $compañias;
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
