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

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index');

Route::get('search', 'SearchController@index')->name('search');

Route::group(['prefix' => 'products', 'as' => 'products.'], function () {
    Route::get('/', 'ProductsController@index')->name('index');
    Route::get('{product}', 'ProductsController@show')->name('show');
});

Route::group(['prefix' => 'notifications', 'as' => 'notifications.'], function () {
    Route::get('/', 'NotificationsController@index')->name('index');
    
    Route::get('/create', 'NotificationsController@create')->name('create');
    Route::post('/create', 'NotificationsController@store')->name('store');

    Route::get('/{notification}', 'NotificationsController@show')->name('show');
});
