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

//Route::get('/home', 'HomeController@index')->name('home');

Route::post('/registrar', 'ProveedoresController@RegistrarProveedor');

Route::post('/verificar', 'ProveedoresController@LoginProveedor');

Route::resource('publicaciones', 'PublicacionesController');
