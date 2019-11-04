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
Route::post('/login','LoginController@login');
Route::get('/','LoginController@index')->name('login');

Route::group(['middleware'=>['auth']],function(){
    Route::get('/logout',function(){
        Auth::logout();
        return redirect()->action('LoginController@index');            
    });
   
});
Route::resource('usuario', 'UsersController');    
Route::resource('categoria', 'CategoriasController');
Route::resource('carro', 'CarrosController');
Route::resource('aluguel', 'AluguelsController');
Route::resource('categoria_carro', 'CategoriaCarrosController');