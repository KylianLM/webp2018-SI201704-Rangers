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

Auth::routes();
Route::get('logout', 'Auth\LoginController@logout');


// Admin Routes
Route::group([
    'namespace' => 'Admin',
    'prefix' => 'admin',
], function () {
    Route::get('/', 'AdminController@index')->name('admin');

    //Config
    Route::get('/config', 'ConfigController@index')->name('config');
    Route::post('/config', 'ConfigController@store')->name('configStore');

    //Messages
    Route::resource('message','MessageController');
    Route::resource('savoir','SavoirController',[
        'except' => ['store','create','destroy','show']
    ]);
    Route::resource('content', 'ContentController',[
        'except' => ['store', 'destroy','update']
    ]);
    Route::put('content','ContentController@update')->name('content.update');
    Route::resource('collaborateurs','CollabController');
});

