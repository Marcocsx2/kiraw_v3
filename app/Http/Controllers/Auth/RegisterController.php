<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;

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
    protected $redirectTo = '/publicaciones';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(Request $request)
    {
        return $request-> validate([
            'name' => ['required', 'string', 'max:255', 'unique:users'],
            'imagen' => ['required', 'file'],
            'descripcion' => ['required','string', 'max:255'],
            'fondo' => ['required', 'file'],
            'profesion' => ['string', 'max:255'],
            'nacimiento' => ['required','string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function register(Request $request)
    {

        $imagen = $request->file('imagen');
       $name_imagen = time().$imagen->getClientOriginalName();
       $imagen->move(public_path().'/imagenes/user_imagen',$name_imagen);

       $fondo = $request->file('fondo');
       $name_fondo = time().$fondo->getClientOriginalName();
       $fondo->move(public_path().'/imagenes/user_fondo',$name_fondo);
        
        // User::create([
        //     'name' => $request['name'],
        //     'fondo'=>$name_fondo,
        //     'imagen'=>$name_imagen,
        //     'descripcion' => $request['descripcion'],
        //     'nacimiento' => $request['nacimiento'],
        //     'profesion' => $request['profesion'],
        //     'email' => $request['email'],
        //     'password' => Hash::make($request['password']),
        // ]);
        
        $cliente = new User();
        $cliente->name = $request->input('name');
        $cliente->fondo = $name_fondo;
        $cliente->imagen = $name_imagen;
        $cliente->descripcion = $request->input('descripcion');
        $cliente->nacimiento = $request->input('nacimiento');
        $cliente->profesion = $request->input('profesion');
        $cliente->email = $request->input('email');
        $cliente->password = bcrypt( $request['password']);
        $cliente->save();

        return view('auth.login');

    }
    
}
