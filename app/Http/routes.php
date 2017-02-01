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
Route::any('userTypeForm/{id?}', 'UserTypeController@form');
Route::get('userType', 'UserTypeController@index');
Route::get('userTypeDelete/{id}', 'UserTypeController@delete');
