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
Route::get('/about', 'HomeController@showAbout');
Route::get('/articles/{id?}', 'HomeController@showArticles');
Route::get('/contact-us', array('as'=>'contact-us','uses'=>'HomeController@showContactUs'));
Route::post('/submit', 'HomeController@postSubmit');
Route::get('/thank-you', 'HomeController@showThankYou');
