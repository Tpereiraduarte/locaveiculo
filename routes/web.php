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
Route::get('/','InicioController@index');
Route::post('admin/login','LoginController@login');
Route::get('admin/','LoginController@index')->name('login');

Route::group(['middleware'=>['auth']],function(){
    Route::get('/logout',function(){
        Auth::logout();
        return redirect()->action('LoginController@index');            
    });
   
});
Route::get('reserva/{id_carro}', 'InicioController@reserva');
Route::resource('inicio', 'InicioController');
Route::resource('usuario', 'UsersController'); 
Route::resource('cliente', 'ClientesController');   
Route::resource('categoria', 'CategoriasController');
Route::resource('carro', 'CarrosController');
Route::post('aluguel/calculo', 'AluguelsController@calculoValorAluguelDinamico')->name('calculo');
Route::post('aluguel/dinamico', 'AluguelsController@dinamico')->name('dinamico');
Route::resource('aluguel', 'AluguelsController');
Route::resource('categoriacarro', 'CategoriaCarrosController');