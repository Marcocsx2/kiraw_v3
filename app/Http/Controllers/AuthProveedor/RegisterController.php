<?php

namespace App\Http\Controllers\AuthProveedor;

use App\User;
use App\Http\Controllers\Controller;
use App\Proveedores;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


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
    protected function validator(array $request)
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

        return $request-> validate([
            'pro_imagen' => ['required', 'file'],
            'pro_nombre' => ['required'],
            'pro_telefono' => ['required','max:9', 'min:9'],
            'pro_trabajadores' => ['required'],
            'pro_descripcion' => ['string', 'max:255'],
            'pro_fundacion' => ['required','date'],
            'pro_correo' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'pro_contraseña' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        // return Validator::make($request, [
        //     'pro_imagen'=>'required|file',
        //     'pro_nombre'=>'required',
        //     'pro_telefono'=>'required|max:9|min:9',
        //     'pro_trabajadores'=>'required',
        //     'pro_descripcion'=>'required',
        //     'pro_fundacion'=>'required',
        //     'pro_correo'=>'required|unique:proveedores',
        //     'pro_contraseña'=>'required|min:6'
        // ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Proveedores
     */
    protected function register(Request $request)
    {   
        
        if($request){
            Proveedores::create([
                
                'pro_nombre' => $request['pro_nombre'],
                'pro_telefono' => $request['pro_telefono'],
                'pro_trabajadores' => $request['pro_trabajadores'],
                'pro_descripcion' => $request['pro_descripcion'],
                'pro_fundacion' => $request['pro_fundacion'],
                'pro_correo' => $request['pro_correo'],
                'pro_contraseña' => Hash::make($request['pro_contraseña']),
        ]);
    }

        // $user = new Proveedores();
        // $user -> pro_imagen = $name_imagen;
        // $user -> pro_nombre = $request -> pro_nombre;
        // $user -> pro_telefono = $request -> pro_telefono;
        // $user -> pro_trabajadores = $request -> pro_trabajadores;
        // $user -> pro_descripcion = $request -> pro_descripcion;
        // $user -> pro_fundacion = $request -> pro_fundacion;
        // $user -> pro_correo =  $request -> pro_correo ;
        // $user -> pro_contraseña = bcrypt( $request -> pro_contraseña );
        // $user -> save();

        // return  route('proveedor.home');
        return view('authProveedor.login');
    }
    
    public function showLoginForm()
    {
        return view('authProveedor.register');
    }
}
