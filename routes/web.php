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

/*Route::get('/', function () {
    return view('_Layout');
});*/

Route::get('inicio','Encuesta\EncuestaController@index')->name('inicio');

Route::get('/logout',function(){
    Auth::logout();
    return view('auth.login');
});

Route::get('/getUsuario','Usuarios\UsuariosController@index')->name('getUsuario');
Route::get('/verUsuario','Usuarios\UsuariosController@verUsuarios')->name('verUsuario');

Route::get('/getPreguntaByTipo/{tipo}', 'Encuesta\EncuestaController@getPreguntasByEncuestas')->name('getPreguntaByTipo');



Auth::routes();

Route::get('/home','HomeController@index')->name('home');

