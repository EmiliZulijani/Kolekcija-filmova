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

Route::get('/', 'PageController@getHome');
Route::get('/index', 'PageController@getIndex');
Route::get('/unos', 'PageController@getUnos');



Route::get ('/index', 'FilmoviController@search');

Route::post('/unos', 'FilmoviController@submit');

Route::get('/unos','FilmoviController@getFilmoviAndZanr');

Route::delete('delete/{id}','FilmoviController@destroy');
