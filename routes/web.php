<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/admin', function () {
    return view('admin.login');
});

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'api', 'middleware' => 'auth'], function () {
    Route::resource('users', 'ApiControllers\UserController');
    Route::resource('categories', 'ApiControllers\CategoryController');
    Route::resource('departments', 'ApiControllers\DepartmentController');
    Route::resource('incidents', 'ApiControllers\IncidentController');
    Route::resource('staffs', 'ApiControllers\StaffController');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::resource('users', 'UserController');
    Route::resource('categories', 'CategoryController');
    Route::resource('departments', 'DepartmentController');
    Route::resource('incidents', 'IncidentController');
    Route::resource('staffs', 'StaffController');
});

Route::get('login/facebook', 'Auth\AuthController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\AuthController@handleProviderCallback');
