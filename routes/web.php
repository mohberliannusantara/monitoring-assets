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

// Route::get('/', 'BerandaController@index');
Route::get('/', function () {
    return view('welcome');
});
Route::get('/beranda', 'BerandaController@index');

// Route Level
Route::get('/level', 'LevelController@index');
Route::get('/level/create', 'LevelController@create');
Route::post('/level', 'LevelController@store');
Route::get('/level/{id}/edit', 'LevelController@edit');
Route::put('/level/{id}', 'LevelController@update');
Route::delete('/level/{id}', 'LevelController@destroy');

// Route Ruang
Route::get('/ruang', 'RuangController@index');
Route::get('/ruang/create', 'RuangController@create');
Route::post('/ruang', 'RuangController@store');
Route::get('/ruang/{id}/edit', 'RuangController@edit');
Route::put('/ruang/{id}', 'RuangController@update');
Route::delete('/ruang/{id}', 'RuangController@destroy');

// Route Pengguna
Route::get('/pengguna', 'PenggunaController@index');
Route::get('/pengguna/create', 'PenggunaController@create');
Route::post('/pengguna', 'PenggunaController@store');
Route::get('/pengguna/{id}/edit', 'PenggunaController@edit');
Route::put('/pengguna/{id}', 'PenggunaController@update');
Route::delete('/pengguna/{id}', 'PenggunaController@destroy');

// Route Properti
Route::get('/properti', 'PropertiController@index');
Route::get('/properti/create', 'PropertiController@create');
Route::post('/properti', 'PropertiController@store');
Route::get('/properti/{id}/edit', 'PropertiController@edit');
Route::put('/properti/{id}', 'PropertiController@update');
Route::delete('/properti/{id}', 'PropertiController@destroy');

// Route Kendaraan
Route::get('/kendaraan', 'KendaraanController@index');
Route::get('/kendaraan/create', 'KendaraanController@create');
Route::post('/kendaraan', 'KendaraanController@store');
Route::get('/kendaraan/{id}/edit', 'KendaraanController@edit');
Route::put('/kendaraan/{id}', 'KendaraanController@update');
Route::delete('/kendaraan/{id}', 'KendaraanController@destroy');

// Route Inventaris
Route::get('/inventaris', 'InventarisController@index');
Route::get('/inventaris/create', 'InventarisController@create');
Route::post('/inventaris', 'InventarisController@store');
Route::get('/inventaris/{id}/edit', 'InventarisController@edit');
Route::put('/inventaris/{id}', 'InventarisController@update');
Route::delete('/inventaris/{id}', 'InventarisController@destroy');
