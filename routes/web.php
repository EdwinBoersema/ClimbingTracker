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
    return view('/default/welcome');
});

Auth::routes();

// User Home Routes
Route::get('/home', 'HomeController@index')->name('home');

// Area Routes
Route::prefix('area')->group(function () {
    Route::name('area.')->group(function () {
        Route::get('/', 'AreaController@index')->name('index');
        Route::get('/create', 'AreaController@create')->name('create');
        Route::post('/create', 'AreaController@create')->name('store');
        Route::get('/{name}/edit', 'AreaController@edit')->name('edit');
        Route::post('/{name}/edit', 'AreaController@update')->name('update');
        Route::get('/{name}', 'AreaController@show')->name('show');
        Route::post('/{name}/destroy', 'AreaController@destroy')->name('destroy');
    });
});
