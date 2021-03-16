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
Route::get('/registration', 'RegController@index')->name('registration');
Route::post('/registration', 'RegController@varify');
Route::get('/system/sales', 'SalesController@index')->name('sales');
Route::get('/system/sales/physical_store', 'SalesController@physical')->name('sales.physical');
Route::post('/system/sales/physical_store', 'SalesController@physicalVarify');
Route::get('/system/sales/ecommerce_store', 'SalesController@ecommerce')->name('sales.ecommerce');
Route::get('/system/sales/social_media_store', 'SalesController@social')->name('sales.social');
Route::get('/system/sales/physical_store/sales_log', 'SalesController@physicalLogs')->name('physical.logs');
Route::get('/system/sales/physical_store/sales_log/download/reportSold','SalesController@physicalLogsSales')->name('sales.physical.logs.sales.download');
Route::get('/system/sales/physical_store/sales_log/download/reportPending','SalesController@physicalLogsPending')->name('sales.physical.logs.pending.download');
Route::post('/system/sales/physical_store/sales_log', 'SalesController@physicalLogsUpload');

Route::get('/system/product_management','ProductController@index')->name('product');

Route::get('/system/product_management/existing_products','ProductController@existingProduct')->name('product.existing');
Route::get('/system/product_management/existing_products/edit/{id}','ProductController@eEdit')->name('product.existing.edit');
Route::post('/system/product_management/existing_products/edit/{id}','ProductController@eUpdate');
Route::get('/system/product_management/existing_products/delete/{id}','ProductController@eDelete')->name('product.existing.delete');

Route::get('/system/product_management/upcoming_products','ProductController@upcomingProduct')->name('product.upcoming');
Route::get('/system/product_management/upcoming_products/edit/{id}','ProductController@uEdit')->name('product.upcoming.edit');
Route::post('/system/product_management/existing_products/edit/{id}','ProductController@uUpdate');
Route::get('/system/product_management/upcoming_products/delete/{id}','ProductController@uDelete')->name('product.upcoming.delete');

Route::get('/system/product_management/add_product','ProductController@addProduct')->name('product.adding');