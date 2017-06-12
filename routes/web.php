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



Route::get('/', function () {
    return view('auth.login');
})->middleware('guest');

Route::group(['prefix' => 'api', 'middleware' => 'auth'], function () {
    Route::resource('users', 'ApiControllers\UserController');
    Route::resource('categories', 'ApiControllers\CategoryController');
    Route::resource('departments', 'ApiControllers\DepartmentController');
    Route::resource('incidents', 'ApiControllers\IncidentController');
    Route::resource('staffs', 'ApiControllers\StaffController');
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::resource('users', 'UserController');
    Route::resource('categories', 'CategoryController');
    Route::resource('departments', 'DepartmentController');
    Route::resource('incidents', 'IncidentController');
    Route::resource('staffs', 'StaffController');
});

Route::group(['prefix' => 'staff'], function () {
    Route::get('/login', 'Auth\StaffLoginController@showLoginForm')->name('staff.login');
    Route::post('/login', 'Auth\StaffLoginController@login')->name('staff.login.submit');
    Route::get('/', 'StaffController@index')->name('staff.dashboard');
    Route::resource('categories', 'CategoryController');
    Route::resource('departments', 'DepartmentController');
    Route::resource('incidents', 'IncidentController');
    Route::resource('staffs', 'StaffController');
});

Route::get('login/facebook', 'Auth\AuthController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\AuthController@handleProviderCallback');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
