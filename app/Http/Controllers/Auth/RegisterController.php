<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

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
        $this->middleware('guest:proveedor');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(Request $request)
    {
        return Validator::make($request, [
            'name' => ['required', 'string', 'max:255'],
            'descripcion' => ['required','string', 'max:255'],
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

        
        // return User::create([
        //     'name' => $data['name'],
        //     'descripcion' => $data['descripcion'],
        //     'profesion' => $data['profesion'],
        //     'nacimiento' => $data['nacimiento'],
        //     'email' => $data['email'],
        //     'password' => Hash::make($data['password']),
        // ]);

        if($request->hasFile('imagen')){
            $file_imagen = $request->file('imagen');
            $name_imagen = time().$file_imagen->getClientOriginalName();
            $file_imagen->move(public_path().'/Imagen_cliente/', $name_imagen);
        }

        if($request->hasFile('fondo')){
            $file_logo = $request->file('fondo');
            $name_logo = time().$file_logo->getClientOriginalName();
            $file_logo->move(public_path().'/Logo_cliente/', $name_logo);
        }

        $cliente = new User();
        $cliente->name = $request->input('name');
        $cliente->fondo = $request->$name_logo;
        $cliente->imagen = $request->$name_imagen;
        $cliente->descripcion = $request->input('descripcion');
        $cliente->profesion = $request->input('profesion');
        $cliente->email = $request->input('email');
        $cliente->password = $request->input('password');
        $cliente->save();

        return 'Saved';

    }
    
}
