<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Route::resource('estoque/categoria', 'CategoriaController');
Route::resource('estoque/produto', 'ProdutoController');
Route::resource('venda/cliente', 'ClienteController');
Auth::routes();

Route::get('/home', 'HomeController@index');

//Route::get('pdf', function(){
	//$pdf = PDF::loadView('estoque.categoria');
	//return $pdf->download('arquivo.pdf');
//});
Route::auth();
