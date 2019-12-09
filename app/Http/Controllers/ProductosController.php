<?php

namespace App\Http\Controllers;

use App\Carrito;
use App\Productos;
use App\Proveedores;
use Illuminate\Contracts\Session\Session;
use Illuminate\Foundation\Auth\Proveedor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $proveedor = Proveedores::all();
        $consulta = Productos::all();
        return view('Productos.show')->with('consulta', $consulta)->with('proveedor',$proveedor);
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
        $consulta = DB::select("call productos_proveedor($id)");
        $proveedor = Proveedores::all()->where('id', 'LIKE', $id);
        
        return view('Productos.show')->with('consulta', $consulta)->with('proveedor',$proveedor);
        
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

    public function getAddToCart(Request $request, $id)
    {
        $product = Productos::find($id);
        $oldCart = session()->has('cart') ? session()->get('cart') : null;
        $cart = new Carrito($oldCart);
        $cart -> add($product, $product->id);

        $request->session()->put('cart', $cart);
        return redirect()->route("productos.index");
    }
    public function getCart()
    {
        if(! session()->has('cart')){
            return view('Carrito.index');
        }

        $oldCart = session()->get('cart');
        $cart = new Carrito($oldCart);
        return view('Carrito.index', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);

    }
}
