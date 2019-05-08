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

Route::get('/', function () {return view('home/index');});

Route::get('/kamienie', ['uses' => 'CollectionController@index','id' => 4]);
Route::get('/kamienie/solobianco', ['uses' => 'CollectionController@kolekcje','id' => 1]);
Route::get('/kamienie/solobianko', ['uses' => 'CollectionController@kolekcje','id' => 1]);
Route::get('/kamienie/woc', ['uses' => 'CollectionController@kolekcje','id' => 2]);
Route::get('/kamienie/bezebrazy', ['uses' => 'CollectionController@kolekcje','id' => 3]);
Route::get('/kamienie/{id}/getpdf','StoneController@getPDF');
Route::get('/kamienie/{id}/{title?}', 'StoneController@show')->name('kamien.show');
Route::get('/oferta', 'OfferController@index');
Route::get('/galeria', 'GalleryController@index');
Route::get('/blog', 'BlogController@index')->name('blog');

Route::get('/inspiracje', function () {return view('inspiracje/index');});
Route::get('/kontakt', 'ContactController@index');
Route::post('/kontakt/wyslij', 'ContactController@send');

Route::get('/zamowienie', 'OrderController@index');
Route::get('/zamowienie/formularz', 'OrderController@form');
Route::post('/zamowienie/wyslij', 'OrderController@send');
// Route::post('/zamowienie/zapisz', 'OrderController@upload');


Route::get('/mediaresource/create', 'MediaresourceController@create');
Route::post('/mediaresource/store', 'MediaresourceController@store');

