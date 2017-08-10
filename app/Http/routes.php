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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'HomeController@index');
Route::get('/result', 'HomeController@result');
Route::get('/visitas', 'HomeController@visitas')
  ->middleware('ResetSession');
Route::get('/visitas/limpia', 'HomeController@limpia');

Route::get('/status/200', 'StatusController@ok');
Route::get('/status/404', 'StatusController@notFound');
Route::get('/status/500', 'StatusController@bigProblem');

Route::get('/redirect', 'ResponseController@redirect');
Route::get('/toAction', 'ResponseController@toAction');
Route::get('/json', 'ResponseController@json');

Route::get('/ages/{age}', 'MiddlesController@ages')
  ->middleware('CheckAge');

Route::get('/userData/{name}', 'MiddlesController@userData')->middleware('AfterMiddle');

Route::get('/users', 'usuariosController@index');
Route::get('/users/add', 'usuariosController@add');
Route::post('/users/save', 'usuariosController@save');
Route::get('/users/{id}', 'usuariosController@edit');
Route::post('/users/{id}', 'usuariosController@update');
Route::get('/users/{id}/delete', 'usuariosController@delete');
