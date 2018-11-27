<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('inventaris', 'Api\InventarisApiController@index');
// Route::resource('inventaris', 'Api\InventarisController');

Route::group(['prefix' => 'v1', 'middleware' => 'cors'], function() {
    Route::resource('inventaris', 'InventarisController', [
        'except' => ['create', 'edit']
    ]);

    Route::resource('inventaris/input', 'RegisterController', [
        'only' => ['store', 'destroy']
    ]);

    Route::post('/user/register', [
        'uses' => 'AuthController@store'
    ]);

    Route::post('/user/signin', [
        'uses' => 'AuthController@signin'
    ]);
});
