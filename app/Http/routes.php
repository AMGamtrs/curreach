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
    Route::get('/users/{id}', 'UserController@show');
    Route::post('/shops', 'ShopsController@store');
    Route::get('/shops/create', 'ShopsController@create');
    Route::get('/shops/{id1}', 'ShopsController@show');
    Route::post('/shops/{id1}/curries', 'CurriesController@store');
    Route::get('/shops/{id1}/curries/create', 'CurriesController@create');
    Route::get('/shops/{id1}/curries/{id2}', 'CurriesController@show');
    //Route::resource('products.reviews', 'RmeviewsController', ['only' => ['create', 'store']]);
    //Route::resource('users', 'UsersController', ['only' => 'show']);
});
