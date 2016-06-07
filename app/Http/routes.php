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

//Route::auth();
Route::get('/home', 'HomeController@index');

Route::get('/suadmin/login', 'SuAdmin\AuthController@getLogin');
Route::post('/suadmin/login', 'SuAdmin\AuthController@postLogin');
Route::get('/suadmin/logout', 'SuAdmin\AuthController@getLogout');

//Super Admin Routes
Route::get('/suadmin/dashboard', 'SuAdmin\DashboardController@index');
Route::get('/suadmin/profile', 'SuAdmin\DashboardController@getProfile');
Route::post('/suadmin/profile', 'SuAdmin\DashboardController@postProfile');
    
//Admin Routes
Route::get('/webpanel/dashboard', 'Admin\DashboardController@index');
Route::get('/webpanel/login','Admin\AuthController@showLoginForm');
Route::post('/webpanel/login','Admin\AuthController@login');
Route::get('/webpanel/logout','Admin\AuthController@logout');
 