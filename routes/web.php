<?php
//use Image;

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

Route::get('/', 'HomeController@getUsers');//makes no sense


Auth::routes();
//Route::get('/home', 'HomeController@index'); //must die
Route::get('/upload', 'UserController@uploadForm');
Route::post('/upload', 'UserController@uploadImage');
Route::get('/manage','UserController@manage');
Route::post('/manage','UserController@updateImage');
Route::get('images/{filename}','ImageController@showImage');
Route::get('/{username}','ImageController@showGallery');
