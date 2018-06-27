<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::group(['middleware' => ['web']], function () {
    Route::auth();
    Route::get('/', 'CurreachesController@index');
    Route::get('/mapsearch', 'ShopsController@mapsearch');
    Route::get('/shops/{id}', 'ShopsController@show');
    Route::post('/shops/store', 'ShopsController@store');
    Route::get('/shops/create', 'ShopsController@create');
    Route::get('/curries/{id}', 'CurriesController@show');
    Route::post('/curries/store', 'CurriesController@store');
    Route::get('/curries/create', 'CurriesController@create');
    //Route::resource('products.reviews', 'RmeviewsController', ['only' => ['create', 'store']]);
    //Route::resource('users', 'UsersController', ['only' => 'show']);
});
