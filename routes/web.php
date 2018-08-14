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

// Index
Route::get('crushes',              'CrushesController@index')    -> name('crushes.index');

// Create Crush
Route::get('crushes/create',       'CrushesController@create')   -> name('crushes.create');

// Store created Crush
Route::post('crushes/store',       'CrushesController@store')    -> name('crushes.store');

// Edit Crush information
Route::get('crushes/{id}/edit',    'CrushesController@edit')     -> name('crushes.id.edit');

// Save updated information of Crush
Route::post('crushes/{id}/update', 'CrushesController@update')   -> name('crushes.id.update');

// Delete Crush
Route::get('crushes/{id}/destroy', 'CrushesController@destroy')  -> name('crushes.id.destroy');

// Show Crush information + Qualities
Route::get('crushes/{id}/show',    'CrushesController@show')     -> name('crushes.id.show');

// Add quality
Route::get('crushes/{id}/quality', 'QualitiesController@create') -> name('crushes.id.quality');

// Save quality
Route::get('crushes/{id}/store',   'QualitiesController@store')  -> name('crushes.id.store');



