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
//controller resfull
Route::resource('movie', 'MovieController');
Route::get('contacto','MovieController@contacto');
Route::get('review','MovieController@review');
Route::get('admin','MovieController@admin');

Route::resource('usuario','UsuarioController');

Route::get('/', function () {
    return view('welcome');
});
