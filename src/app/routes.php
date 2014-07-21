<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::model('user', 'User');

Route::model('apiKey', 'ApiKey');
Route::model('link', 'Link');



Route::get('/', 'HomeController@getIndex');

Route::get('/{short}', 'HomeController@getRedirect');

Route::post('/link','RestController@postCreate');

Route::get('link/{short}','RestController@getIndex');
