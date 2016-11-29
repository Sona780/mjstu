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

//Channels Routes
Route::get('/channels/create', 'ChannelController@create');
Route::post('/channels/create/save', 'ChannelController@save');
Route::get('/channels/index', 'ChannelController@index');

//Video Routes
Route::get('videos/upload','VideoController@create');
