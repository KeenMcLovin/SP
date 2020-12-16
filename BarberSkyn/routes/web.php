<?php

Route::get('/', function () {
    return view('index');
});

Route::get('allproductos', function () {
    return view('allproductos');
});

Route::get('inicio', function () {
    return view('inicio');
});

Route::get('miscompras', function () {
    return view('miscompras');
});

Route::get('miperfil', function () {
    return view('miperfil');
});

Route::get('minegocio', function () {
    return view('minegocio');
});

Route::get('misventas', function () {
    return view('misventas');
});


Route::post('/login', 'ClienteController@login')->name('login');
Route::get('/logout', 'ClienteController@logout')->name('logout');



Route::get('/misproductos', 'ProductoController@index')->name('misproductos');

Route::get('/misproveedores', 'ProveedorController@index')->name('misproveedores');

Route::get('/allproductos', 'Productoad@index')->name('allproductos');



Route::post('/addcliente', 'ClienteController@store')->name('cliente.agregar');

Route::post('/addproveedor', 'ProveedorController@create')->name('proveedor.agregar');

Route::post('/addproducto', 'ProductoController@create')->name('producto.agregar');