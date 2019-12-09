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

use App\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {

    return view('welcome');

});

Auth::routes();

Route::group(['middleware'=>'auth'], function(){

//Route::get('/home', 'HomeController@index')->name('home');

Route::resource('publicaciones', 'PublicacionesController');

Route::resource('compañias', 'CompañiasController');

Route::resource('perfiles', 'ClienteController');

Route::resource('productos','ProductosController');

Route::post('publicaciones/{post}/vote','PostVotesController@store')->name('vote_post_path');

Route::get('/carrito','CarritoController@index')->name('carrito');

});



//Route::post('verificar', 'ProveedoresController@LoginProveedor');
    
Route::post('proveedor/register','AuthProveedor\RegisterController@register')->name('proveedor.register.submit');
Route::get('proveedor/register', 'AuthProveedor\RegisterController@showLoginForm')->name('proveedor.register');
Route::post('proveedor/login', 'AuthProveedor\LoginController@login')->name('proveedor.login.submit');
Route::get('proveedor/login', 'AuthProveedor\LoginController@showLoginForm')->name('proveedor.login');
Route::get('proveedor/publicaciones','AuthProveedor\LoginController@getProfile')->name('proveedor.home');


// Route::get('proveedor', 'ProveedoresController@index')->name('proveedor.home');

Route::get('compañias/{id}', 'CompañiasController@show')->name('compañias.show');

Route::post('/publicaciones/{post}/comentario', 'ComentariosController@create')->name('comentarios');



Route::get('/confirmo', function(){
    return view('Carrito.show');
});

Route::get('/prueba', function(){
    return view('Carrito.carrito');
});




