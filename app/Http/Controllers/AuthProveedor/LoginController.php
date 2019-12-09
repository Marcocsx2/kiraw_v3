<?php

namespace App\Http\Controllers\AuthProveedor;

use App\Http\Controllers\Controller;
use App\Proveedores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
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


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:proveedor')->except('logout');
    }

    public function showLoginForm()
    {
        return view('authProveedor.login');
    }

    public function Login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        $proveedores = Proveedores::all();
        
        $credenciales = $request->only('email', 'password');

        if (Auth::guard('proveedor')->attempt($credenciales)) {
            return redirect()->route('proveedor.home')->with('proveedores' , $proveedores);
        }
        // return redirect()->back();

        return redirect()->back()->withInput($request->only('email','remenber'));
                        
    }

    public function getProfile() 
    {
        return view('Inicio.inicio');
    }

    public function getLogout()
    {
        Auth::guard('proveedor')->logout();
        return redirect()->back();
    }

}
