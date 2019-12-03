<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\Auth\ProveedoresController;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Resources\Json\Resource;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware'=>'auth'], function(){

//Route::get('/home', 'HomeController@index')->name('home');

Route::resource('publicaciones', 'PublicacionesController');

Route::resource('compañias', 'CompañiasController');

Route::resource('perfiles', 'ClienteController');

});

//Route::post('verificar', 'ProveedoresController@LoginProveedor');

Route::group(['prefix'=>'proveedor'], function(){
    Route::get('/login', 'AuthProveedor\LoginController@showLoginForm')->name('proveedor.login');
    Route::get('/register', 'AuthProveedor\RegisterController@showLoginForm')->name('proveedor.register');
    Route::post('/register','AuthProveedor\RegisterController@create')->name('proveedor.register.submit');
    Route::post('/login', 'AuthProveedor\LoginController@login')->name('proveedor.login.submit');
    Route::get('proveedor', 'ProveedoresController@index')->name('proveedor.home');
});





