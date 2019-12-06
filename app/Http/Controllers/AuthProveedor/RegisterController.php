<?php

namespace App\Http\Controllers\AuthProveedor;

use App\User;
use App\Http\Controllers\Controller;
use App\Proveedores;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Symfony\Component\HttpFoundation\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/proveedor/proveedor';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:proveedor');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $validacion)
    {
        // return Validator::make($request->all(), [
        //     'pro_nombre'=>'required',
        //     'pro_telefono'=>'required|max:9|min:9',
        //     'pro_trabajadores'=>'required',
        //     'pro_descripcion'=>'required',
        //     'pro_fundacion'=>'required',
        //     'pro_correo'=>'required|unique:proveedores',
        //     'pro_contraseña'=>'required|min:6'
        // ]);

        return Validator::make($validacion, [
            'pro_nombre'=>'required',
            'pro_telefono'=>'required|max:9|min:9',
            'pro_trabajadores'=>'required',
            'pro_descripcion'=>'required',
            'pro_fundacion'=>'required',
            'pro_correo'=>'required|unique:proveedores',
            'pro_contraseña'=>'required|min:6'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Proveedores
     */
    protected function create(Request $request)
    {   
        $validacion = $request->all();
        if($validacion){
            Proveedores::create([
                'pro_nombre' => $validacion['pro_nombre'],
                'pro_telefono' => $validacion['pro_telefono'],
                'pro_trabajadores' => $validacion['pro_trabajadores'],
                'pro_descripcion' => $validacion['pro_descripcion'],
                'pro_fundacion' => $validacion['pro_fundacion'],
                'pro_correo' => $validacion['pro_correo'],
                'pro_contraseña' => Hash::make($validacion['pro_contraseña']),
        ]);
    }

        // $user = new Proveedores();
        // $user -> pro_nombre = $request -> pro_nombre;
        // $user -> pro_telefono = $request -> pro_telefono;
        // $user -> pro_trabajadores = $request -> pro_trabajadores;
        // $user -> pro_descripcion = $request -> pro_descripcion;
        // $user -> pro_fundacion = $request -> pro_fundacion;
        // $user -> pro_correo =  $request -> pro_correo ;
        // $user -> pro_contraseña = bcrypt( $request -> pro_contraseña );
        // $user -> save();

        // return  route('proveedor.home');
    
    }
    public function showLoginForm()
    {
        return view('authProveedor.register');
    }
}