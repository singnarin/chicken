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

Route::get('/', 'SiteController@index');
Route::get('userType', 'UserTypeController@index');
Route::get('userTypeDelete/{id}', 'UserTypeController@delete');
Route::any('userTypeForm/{id?}', 'UserTypeController@form');
Route::get('user', 'UserController@index');
Route::get('userDelete/{id}', 'UserController@delete');
Route::any('userForm/{id?}', 'UserController@form');
Route::get('farm', 'FarmController@index');
Route::get('farmDelete/{id}', 'FarmController@delete');
Route::any('farmForm/{id?}', 'farmController@form');
Route::get('orderBaby', 'OrderController@orderBaby');
