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
Route::get('/channels/browse', 'ChannelController@browse');
Route::get('/channels/browse/{channel}','ChannelController@showChannel');
Route::post('/channels/subscribe/{channel}','ChannelController@subscribeChannel');
Route::post('/channels/unsubscribe/{channel}','ChannelController@unsubscribeChannel');

//Video Routes
Route::get('/videos/upload','VideoController@create');
Route::post('/videos/upload/save','VideoController@save');
Route::get('/videos/index','VideoController@index');
Route::get('/videos/index/{id}','VideoController@showVideo');

Route::get('/videos/edit/{id}', function($id){
    $video = App\Video::find($id);
    return view('editvideo',compact('video'));
});

Route::patch('/videos/edit/update/{video}','VideoController@editVideo');

Route::get('/videos/delete/{id}', function($id){
    $video = App\Video::find($id);
    return view('deletevideo',compact('video'));
});

Route::delete('/videos/delete/confirm/{video}','VideoController@deleteVideo');
