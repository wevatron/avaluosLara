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
    return view('lobby');
});

Route::get('laptops', function ()
{
	return view('forms.laptops');

});

Route::get('allinone', function ()
{
	# code...
	return view('forms.allinone');
});
