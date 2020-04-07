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
        Route::post('/create', 'AreaController@store')->name('store');
        Route::get('/{name}/edit', 'AreaController@edit')->name('edit');
        Route::put('/{name}/edit', 'AreaController@update')->name('update');
        Route::post('/{name}/destroy', 'AreaController@destroy')->name('destroy');
    });
    // Climbing route Routes
    Route::name('route.')->group(function () {
        Route::get('/{name}', 'RouteController@index')->name('index');
        Route::get('/{name}/create', 'RouteController@create')->name('create');
        Route::post('/{name}/create', 'RouteController@store')->name('store');
        Route::get('/{name}/{route}', 'RouteController@show')->name('show');
        Route::get('/{name}/{route}/edit', 'RouteController@edit')->name('edit');
        Route::put('/{name}/{route}/edit', 'RouteController@update')->name('update');
        Route::post('/{name}/{route}/destroy', 'RouteController@show')->name('destroy');
    });
});
