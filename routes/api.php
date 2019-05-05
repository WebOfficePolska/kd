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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/stone/all', 'StoneController@all');
Route::get('/stone/show/{id}', 'StoneController@finishes');
Route::post('/zamowienie/zapisz', 'OrderController@upload');
Route::get('/zamowienie/resp', 'OrderController@resp');
