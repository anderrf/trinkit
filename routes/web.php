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

Route::get('/lista', function () {
    return view('layout.item.list');
});

Route::prefix('adicionar')->group(function () {

    Route::redirect('/', '/');

    Route::get('/objeto', 'App\Http\Controllers\ObjectController@addObject');

    Route::get('/categoria', 'App\Http\Controllers\CategoryController@addCategory');
});