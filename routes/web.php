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

Route::get('/', 'HomeController@index');

Route::get('/auth0/callback', '\Auth0\Login\Auth0Controller@callback');
Route::get('/logout',function(){
    Auth::logout();
    return redirect('/');
});

Route::get('/test','HomeController@test');
Route::get('/search','HomeController@search');
Route::get('/dine/create','DineController@createDineView')->middleware('auth');
Route::post('/dine/create','HostController@becomeHost')->middleware('auth');

Route::get('/profile','ProfileController@self');
Route::get('/profile/{id}','ProfileController@getProfile');

Route::get('/order/{id}','DineController@reservationConfirm');