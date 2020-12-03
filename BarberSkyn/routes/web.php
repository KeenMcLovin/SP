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
    return view('index');
});

Route::get('inicio', function () {
    return view('inicio');
});

Route::get('miscompras', function () {
    return view('miscompras');
});

Route::get('productos', function () {
    return view('productos');
});

Route::get('miperfil', function () {
    return view('miperfil');
});

Route::get('minegocio', function () {
    return view('minegocio');
});

Route::get('misproveedores', function () {
    return view('misproveedores');
});

Route::get('misproductos', function () {
    return view('misproductos');
});

Route::get('misventas', function () {
    return view('misventas');
});

Route::post('/', 'ClienteController@store')->name('registro.crear');

Route::post('/', 'ClienteController@index')->name('registro.entrar');