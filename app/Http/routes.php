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
Route::get('orderBabyDelete/{id}', 'OrderController@orderBabyDelete');
Route::any('orderBabyForm/{id?}', 'OrderController@orderBabyForm');
Route::get('orderFood', 'OrderController@orderFood');
Route::get('orderFoodDelete/{id}', 'OrderController@orderFoodDelete');
Route::any('orderFoodForm/{id?}', 'OrderController@orderFoodForm');
Route::get('babyList', 'ManagerController@babyList');
Route::get('babyApprove/{id}', 'ManagerController@babyApprove');
Route::get('babyNoApprove/{id}', 'ManagerController@babyNoApprove');
Route::get('foodList', 'ManagerController@foodList');
Route::get('foodApprove/{id}', 'ManagerController@foodApprove');
Route::get('foodNoApprove/{id}', 'ManagerController@foodNoApprove');
Route::any('feedList/{id?}', 'ChickenController@feedList');
Route::any('feedForm/{id?}', 'ChickenController@feedForm');
Route::any('growthList/{id?}', 'ChickenController@growthList');
Route::any('growthForm/{id?}', 'ChickenController@growthForm');
Route::any('killList/{id?}', 'ChickenController@killList');
Route::get('kill/{id?}', 'ChickenController@kill');
Route::get('totalBaby', 'ReportController@totalBaby');
Route::get('totalBig', 'ReportController@totalBig');
Route::get('totalForKill', 'ReportController@totalForKill');
Route::get('totalKill', 'ReportController@totalKill');
Route::get('totalSale', 'ReportController@totalSale');
Route::get('loginForm', 'SiteController@loginForm');
Route::post('login', 'SiteController@login');
Route::get('logout', 'SiteController@logout');
