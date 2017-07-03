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

Route::get('/', 'HomeController@index');
Route::get('signin', 'SessionController@create');
Route::middleware('web')->post('signout', 'SessionController@destroy');
Route::get('signup', 'UserController@create');
Route::middleware('web')->post('authenticate', 'SessionController@store');


Route::get('dashboard', 'SessionController@index');

Route::get('users', 'UserController@index');
Route::get('users/{id}/edit', 'UserController@edit');
Route::post('users/store', 'UserController@store');
Route::post('users/update', 'UserController@update');

// Route::resource('session','SessionController');

// Route::get('roles','RoleController@index');
// Route::get('roles/store','RoleController@store');
// Route::get('roles/{id}/delete','RoleController@delete');
// Route::post('authenticate','SessionController@store');

Auth::routes();

// Route::get('home', 'HomeController@index')->name('home');
// Route::get('targets/store','TargetController@store');
