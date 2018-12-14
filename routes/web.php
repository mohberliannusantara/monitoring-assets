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

// Route::get('/', function () {
//     return view('welcome');
// });

// logged in users / pengguna_auth cannot access or send request these pages
Route::group(['middleware' => 'pengguna_guest'], function ()
{
  Route::get('login', 'PenggunaAuth\LoginController@showLoginForm');
  Route::post('login', 'PenggunaAuth\LoginController@login');

  Route::get('/', function () {
    return view('welcome');
  });

});

// only logged in sellers can access or send request to these pages
Route::group(['middleware' => 'pengguna_auth'], function ()
{
  Route::post('logout', 'PenggunaAuth\LoginController@logout');

  Route::get('/beranda', 'BerandaController@index');

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

  // Route Level
  Route::get('/level', 'LevelController@index');
  Route::get('/level/create', 'LevelController@create');
  Route::post('/level', 'LevelController@store');
  Route::get('/level/{id}/edit', 'LevelController@edit');
  Route::put('/level/{id}', 'LevelController@update');
  Route::delete('/level/{id}', 'LevelController@destroy');

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

  // Route Sampah
  Route::get('/sampah', 'SampahController@index');
  Route::get('/sampah/create', 'SampahController@create');
  Route::post('/sampah', 'SampahController@store');
  Route::get('/sampah/{id}/edit', 'SampahController@edit');
  Route::put('/sampah/{id}', 'SampahController@update');
  Route::delete('/sampah/{id}', 'SampahController@destroy');
});
