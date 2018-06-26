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
    Route::get('/', 'CurreachsController@index');
    Route::get('/mapsearch', 'ShopsController@mapsearch');
    Route::get('/shops/{id}', 'ShopsController@show');
    Route::post('/shops/store', 'ShopsController@store');
    Route::get('/shops/create', 'ShopsController@create');
    Route::get('/currys/{id}', 'CurrysController@show');
    Route::post('/currys/store', 'CurrysController@store');
    Route::get('/currys/create', 'CurrysController@create');
    //Route::resource('products.reviews', 'ReviewsController', ['only' => ['create', 'store']]);
    //Route::resource('users', 'UsersController', ['only' => 'show']);
    Route::auth();
});
