<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index');

Route::get('auth/facebook', 'AuthController@redirectToProvider')->name('facebook.login');
Route::get('auth/facebook/callback', 'AuthController@handleProviderCallback');

Route::get('auth/google', 'googleController@redirectToProvider')->name('google.login');
Route::get('auth/google/callback', 'googleController@handleProviderCallback');

Route::get('auth/twitter', 'twitterController@redirectToProvider')->name('twitter.login');
Route::get('auth/twitter/callback', 'twitterController@handleProviderCallback');



