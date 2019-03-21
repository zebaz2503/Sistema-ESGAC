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
});

/*Route::get('/canes/edit', function () {
    return view('canes.edit');
});*/


Route::resource('razas', 'RazasController');
Route::resource('anomalias', 'AnomaliasController');
Route::resource('alimentos', 'AlimentoController');
Route::resource('canes', 'CanesController');

