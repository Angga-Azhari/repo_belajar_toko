<?php

use Illuminate\Http\Request;
Route::post('/register', 'UserController@register');
Route::post('/login', 'UserController@login');

Route::group(['middleware' => ['jwt.verify']], function ()
{

Route::get('/barang', 'BarangController@show');
Route::post('/barang', 'BarangController@store');
Route::put('/barang/{id_barang}', 'BarangController@update');
Route::delete('/barang/{id_barang}', 'BarangController@destroy');

Route::post('/customer', 'CustomerController@store');
Route::get('/customer', 'CustomerController@show');
Route::get('/customer/{id_pembeli}', 'CustomerController@detail');
Route::put('/customer/{id_pembeli}', 'CustomerController@update');
Route::delete('/customer/{id_pembeli}', 'CustomerController@destroy');

Route::get('/transaksi', 'TransaksiController@show');
Route::get('/transaksi/{id_transaksi}', 'TransaksiController@detail');
Route::post('/transaksi', 'TransaksiController@store');
Route::put('/transaksi/{id_transaksi}', 'TransaksiController@update');
Route::delete('/transaksi/{id_transaksi}', 'TransaksiController@destroy');
});