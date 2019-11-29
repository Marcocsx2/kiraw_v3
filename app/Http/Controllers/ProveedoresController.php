<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Proveedores;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class ProveedoresController extends Controller
{
    //
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/publicaciones';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function RegistrarProveedor(Request $request)
    {
        $validacion = Validator::make($request->all(),[
            'pro_nombre'=>'required',
            'pro_telefono'=>'required|max:9|min:9',
            'pro_trabajadores'=>'required',
            'pro_descripcion'=>'required',
            'pro_fundacion'=>'required',
            'pro_correo'=>'required|unique:proveedores',
            'pro_contraseña'=>'required|min:6'
        ]);

        if($validacion->fails()){
            return redirect('/register')
                ->withInput()
                ->withErrors($validacion);
        }

        $user = new Proveedores();
        $user -> pro_nombre = $request -> pro_nombre;
        $user -> pro_telefono = $request -> pro_telefono;
        $user -> pro_trabajadores = $request -> pro_trabajadores;
        $user -> pro_descripcion = $request -> pro_descripcion;
        $user -> pro_fundacion = $request -> pro_fundacion;
        $user -> pro_correo =  $request -> pro_correo ;
        $user -> pro_contraseña = bcrypt( $request -> pro_contraseña );
        $user -> save();

        return  View('Inicio_pro.inicio_pro');

    }

    public function LoginProveedor(Request $request)
    {

        $credenciales = Validator::make($request->all(),[
            'pro_correo'=> ['required'],
            'pro_contraseña'=> ['min:6'],
        ]);

        $proveedores = new Proveedores();

        $proveedores -> get('pro_correo');
        $proveedores -> get('pro_contraseña');

        if($credenciales->fails()){

            return redirect('/login')
               ->withInput()
               ->withErrors($credenciales);
        }
        else
        {
            if (Auth::guard('proveedor')->attempt([$proveedores]))
            {
                return View('Inicio_pro.inicio_pro');
            }
            else
            {
                return back()
                    ->withInput()
                    ->withErrors($credenciales);
            }
        }
    }
}
