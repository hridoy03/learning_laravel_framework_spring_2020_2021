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
    return redirect()->route('login');
})->name('root');

Route::get('/login', 'LoginController@index')->name('login');
Route::post('/login', 'LoginController@varify');
Route::get('/userview', 'DashController@index')->name('dashboard');
Route::get('/logout', 'LogoutController@index')->name('logout');
