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

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/import', [
    'middleware' => 'auth',
    'uses' => 'ImportController@index'
]);
Route::get('/import/import', [
    'middleware' => 'auth',
    'uses' => 'ImportController@import'
]);

Route::group(['prefix' => 'api'], function () {
    Route::get('/make', [
        'uses'  =>  'ApiController@make'
    ]);
    Route::get('/make/{make}', [
        'uses'  =>  'ApiController@make'
    ]);
    Route::get('/model/{make_id}', [
        'uses'  =>  'ApiController@model'
    ]);
    Route::get('/photo/{make}/{model}', [
        'uses'  =>  'ApiController@photo'
    ]);
});
