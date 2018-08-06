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

Route::get('crushes', 'CrushesController@index')->name('crushes.index');

Route::get('crushes/create', 'CrushesController@create')->name('crushes.create');

Route::post('crushes/store', 'CrushesController@store')->name('crushes.store');

Route::get('crushes/{id}/edit', 'CrushesController@edit')->name('crushes.id.edit');

Route::post('crushes/{id}/update', 'CrushesController@update')->name('crushes.id.update');

Route::get('crushes/{id}/destroy', 'CrushesController@destroy')->name('crushes.id.destroy');
