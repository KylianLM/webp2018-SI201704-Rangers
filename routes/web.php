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

Auth::routes();

// Admin Routes
Route::group([
    'namespace' => 'Admin',
    'prefix' => 'admin',
], function () {
    Route::get('/', 'AdminController@index');

    //Config
    Route::get('/config', 'ConfigController@index');
    Route::post('/config', 'ConfigController@store')->name('configStore');
});

