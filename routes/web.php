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
    return view('login');
});


Route::resource("avaluos", "avaluosController");
Route::resource("marcas", "MarcasController");
Route::resource("pro", "ProsController");
Route::resource("almacen", "AlmacenesController");
Route::resource("ram", "RamsController");
Route::resource("laptops", "LaptopsController");

Route::get('asink', function(){

	return view('laptops');
});

Route::get ("marcasAjax", "MarcasController@nombreMarcaAjax");