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

Route::get('/', 'HomeController@showWelcome');


//Route::get('/test2/{name}', 'HelloController@showHello');
Route::get('/test2', 'HelloController@showHello');
Route::post('/test2', 'HelloController@showHello');
Route::get('/form', array('as'=>'form','uses'=>'HelloController@showForm'));
Route::post('/submit', 'HelloController@postSubmit');

Route::get('/dbtest/{id}', 'HelloController@dbTest');