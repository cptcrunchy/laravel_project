<?php

/*...*/

Route::get('/', function () {
    return view('welcome');

});
Route::get('/contact', 'PostController@contact');
Route::get('/post/{id}', 'PostController@show_post');
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
Route::group(['middleware' => ['web']], function () {
    
    
    
    
    
});

