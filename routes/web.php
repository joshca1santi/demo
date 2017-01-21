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
Route::get('/reportar', 'HomeController@report');


Route::group(['middleware'=>'auth','namespace'=>'Admin'],function(){
Route::get('/usuarios', 'UserController@index');
Route::get('/proyectos', 'ConfigController@index');
Route::get('/config', 'projectController@index');



});