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
    Route::get('/about', 'CurreachesController@about');
    Route::get('/mapsearch', 'ShopsController@mapsearch');
    Route::get('/mapajax', 'ShopsController@mapajax');
    Route::get('/users', 'Auth\AuthController@login');
    Route::get('/users/{id}', 'UsersController@show');
    Route::get('/users/{id}/bookmarks', 'UsersController@bookmarks');
    Route::get('/users/{id}/likes', 'UsersController@likes');
    Route::get('/users/{id}/profile', 'UsersController@profile');
    Route::post('/shops', 'ShopsController@store');
    Route::get('/shops/create', 'ShopsController@create');
    Route::get('/shops/{id1}', 'ShopsController@show');
    Route::post('/shops/{id1}/curries', 'CurriesController@store');
    Route::get('/shops/{id1}/curries/create', 'CurriesController@create');
    Route::get('/shops/{id1}/curries/{id2}', 'CurriesController@show');
    Route::get('/csearch', 'CurriesController@search');
    Route::get('/ssearch', 'ShopsController@search');
    Route::post('/shopreview', 'ReviewsController@shopreview');
    Route::post('/curryreview', 'ReviewsController@curryreview');
});
