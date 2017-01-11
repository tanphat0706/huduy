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

Route::get('/', [
    'as' => 'frontend',
    'uses' => 'HomeController@index'
]);

Route::get('/vali-keo', [
    'as' => 'vali_keo',
    'uses' => 'CategoryController@index'
]);

Route::get('/vali-keo/vali-keo-1', [
    'as' => 'vali_keo_1',
    'uses' => 'ProductController@index'
]);