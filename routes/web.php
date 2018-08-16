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
Route::get('/delete/{idUsuario}','Usuarios\UsuariosController@delete');
Route::get('/edit/{idUsuario}','Usuarios\UsuariosController@edit');
Route::post('actualizar', 'Usuarios\UsuariosController@update')->name('actualizar.update');

Route::get('/verEncuestas','Encuesta\ExternoController@getEncuestas')->name('verEncuestas');
Route::post('respuesta', 'Encuesta\ExternoController@store')->name('respuesta.store');

Route::get('/getPreguntaByTipo/{tipo}', 'Encuesta\EncuestaController@getPreguntasByEncuestas')->name('getPreguntaByTipo');

Route::post('ajaxRequest', 'Encuesta\Encuesta@ajaxRequestPost');

Route::post('encuesta', 'Encuesta\EncuestaController@store')->name('encuesta.store');
Route::get('/verRespuestas','Encuesta\EncuestaController@getEncuestasCerradas')->name('verRespuestas');




Auth::routes();

Route::get('/home','HomeController@index')->name('home');
Route::get('/pdf/{titulo}','Usuarios\UsuariosController@generarPdf')->name('pdf');
Route::get('grafico', 'Encuesta\EncuestaController@getGrafica');

//Route::get('/getEncuestaByid/{titulo}', 'Encuesta\ExternoController@getEncuestaByid');
Route::post('setEncuesta', 'Encuesta\ExternoController@getEncuestaByid')->name('setEncuesta.store');
/*Route::get('getEncuestaByid/{titulo}',function($titulo){
    $title =  trim($titulo);
    $preguntas = DB::table('preguntas')
    ->where('titulo','=',$title)
    ->get();
    return $preguntas;
});
*/