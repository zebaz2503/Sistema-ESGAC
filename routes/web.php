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

Route::get('/', function () {
    return view('welcome');
    //$pdf = App::make('dompdf.wrapper');
    /*$pdf = PDF::loadHTML('<h1>Test</h1>');
    return $pdf->stream();*/
});

/*Route::get('/usuarios/login', function () {
    return view('usuarios.login');
});*/


Route::resource('razas', 'RazasController');
Route::resource('anomalias', 'AnomaliasController');
Route::resource('alimentos', 'AlimentoController');
Route::resource('canes', 'CanesController');
Route::resource('usuarios', 'UsuariosController');
Route::resource('alimentacion', 'AlimentacionController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


