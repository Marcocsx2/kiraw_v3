<?php

namespace App\Http\Controllers\AuthProveedor;

use App\Http\Controllers\Controller;
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
            'pro_correo' => 'required|email',
            'pro_contraseña' => 'required|min:6'
        ]);

        $credential = [
            'pro_correo'     => $request->pro_correo,
            'pro_contraseña' => $request->pro_contraseña,

        ];

        if (Auth::guard('proveedor')->attempt($credential, $request->member)){
            return redirect()->intended(route('Inicio_pro.inicio_pro'));
        }

        return redirect()->back()->withInput($request->only('pro_correo','remenber'));
    }

}
