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
    return view('auth.login');

});

// Route::get('/pdf', function () {
//     return view('pdf.pdf_fecha');
// });


Route::resource('razas', 'RazasController');
Route::resource('anomalias', 'AnomaliasController');
Route::resource('alimentos', 'AlimentoController');
Route::resource('canes', 'CanesController');
Route::resource('usuarios', 'UsuariosController');
Route::resource('alimentacion', 'AlimentacionController');
Route::resource('pdfs', 'PdfController');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes(['register'=>false]);


Route::get('/imprimir', 'Controller@imprimir')->name('imprimir');

Route::get('/imprimir_2', 'Controller@imprimir_2')->name('imprimir_2');
Route::get('/imprimir_3', 'Controller@imprimir_3')->name('imprimir_3');


