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
    return view('welcome');
});

Route::get('/roles','RoleController@index')->middleware('auth');
Route::get('/roles/store','RoleController@store');
Route::get('/roles/{id}/delete','RoleController@delete')->middleware('auth');
Route::post('authenticate','SessionController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
