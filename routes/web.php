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
use Illuminate\Routing\RouteRegistrar;
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



Route::post('publicaciones/{post}/vote','PostVotesController@store')->name('vote_post_path');

// Route::get('/carrito','CarritoController@index')->name('carrito');

});

Route::resource('productos','ProductosController');


//Route::post('verificar', 'ProveedoresController@LoginProveedor');
    
Route::group(['prefix'=> 'proveedor'], function(){
    Route::group(['middleware' => 'guest'], function(){
        Route::post('/register', 'AuthProveedor\RegisterController@register')->name('proveedor.register.submit');
        Route::get('/register', 'AuthProveedor\RegisterController@showLoginForm')->name('proveedor.register');
        Route::post('/login', 'AuthProveedor\LoginController@login')->name('proveedor.login.submit');
        Route::get('/login', 'AuthProveedor\LoginController@showLoginForm')->name('proveedor.login');
    });
    Route::group(['middleware' => 'auth'], function(){
        Route::get('/publicaciones','AuthProveedor\LoginController@getProfile')->name('proveedor.home');
        Route::get('/logout' ,'AuthProveedor\LoginController@getLogout')->name('proveedor.logout');
    });    
});

Route::get('compañias/{id}', 'CompañiasController@show')->name('compañias.show');

Route::post('/publicaciones/{post}/comentario', 'ComentariosController@create')->name('comentarios');

Route::get('/add-to-cart/{id}', 'ProductosController@getAddToCart')->name('productos.addToCart');

Route::get('/shoppig-cart', 'ProductosController@getCart')->name('productos.shoppingCart');


