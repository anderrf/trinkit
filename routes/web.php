<?php

use Illuminate\Support\Facades\Route;

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

Route::redirect('/', '/lista');

Route::prefix('/lista')->group(function(){

    Route::get('/', 'App\Http\Controllers\ListController@showCategoryList');

    Route::get('/{categoryId}', 'App\Http\Controllers\ListController@showObjectsByCategory');

});

Route::prefix('adicionar')->group(function () {

    Route::redirect('/', '/');

    Route::get('/objeto/{categoryId}', 'App\Http\Controllers\ObjectController@addObject')->name('addObject');

    Route::get('/categoria', 'App\Http\Controllers\CategoryController@addCategory')->name('addCategory');

});

Route::prefix('salvar')->group(function(){

    Route::redirect('/', '/');

    Route::post('/objeto', 'App\Http\Controllers\ObjectController@saveObject')->name('saveObject');

    Route::post('/categoria', 'App\Http\Controllers\CategoryController@saveCategory')->name('saveCategory');

});
