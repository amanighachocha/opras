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
Route::get('signout', 'SessionController@destroy');
Route::get('signup', 'UserController@create');
Route::middleware('web')->post('authenticate', 'SessionController@store');


Route::get('dashboard', 'SessionController@index');

// Users management routes
Route::get('users', 'UserController@index');
Route::get('users/{id}/edit', 'UserController@edit');
Route::post('users/store', 'UserController@store');
Route::post('users/update', 'UserController@update');
// End of users management routes

// Roles and permissions management routes
Route::get('roles', 'RoleController@index');
Route::get('roles/{id}/edit', 'RoleController@edit');
Route::post('roles/store', 'RoleController@store');
Route::post('roles/update', 'RoleController@update');
Route::post('roles/permissions/store','RoleController@attachPermissions');
// End of roles and permissions management routes


Auth::routes();


