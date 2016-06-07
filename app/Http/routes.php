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


//
//// Super Admin area
Route::get('admin', function () {
    return redirect('/admin/dashboard');
});

Route::group(array('namespace' => 'Admin','middleware' => 'auth'), function()
{
    Route::get('admin/dashboard', 'DashboardController@index');
    Route::get('admin/profile', 'DashboardController@getProfile');
    Route::post('admin/profile', 'DashboardController@postProfile');
});

// Logging in and out
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::group(['middleware' => ['web']], function(){
	Route::auth();
	Route::get('/home', 'HomeController@index');
});

Route::group(array('middleware' => 'web'), function () {
    //Login Routes...
    Route::get('/webpanel/login','SadminAuth\AuthController@showLoginForm');
    Route::post('/webpanel/login','SadminAuth\AuthController@login');
    Route::get('/webpanel/logout','SadminAuth\AuthController@logout');
    Route::get('/webpanel', 'SadminController@index');
}); 