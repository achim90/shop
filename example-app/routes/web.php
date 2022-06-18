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
//
Route::get('/', function () {
    return view('layouts.main');
})->name('layouts.main');
//Route::get('/', \App\Http\Controllers\Controller::class)->name('layouts.main');

Route::group(['prefix' => 'admin'], function () {
    Route::group(['prefix' => 'categories'], function () {
        Route::get('/', \App\Http\Controllers\Admin\Category\IndexController::class)->name('category.index');
        Route::get('/create', \App\Http\Controllers\Admin\Product\CreateController::class)->name('category.create');
        Route::post('/', \App\Http\Controllers\Admin\Product\StoreController::class)->name('category.store');
        Route::get('/{category}', \App\Http\Controllers\Admin\Product\ShowController::class)->name('category.show');
        Route::get('/{category}/edit', \App\Http\Controllers\Admin\Product\EditController::class)->name('category.edit');
        Route::patch('/{category}', \App\Http\Controllers\Admin\Product\UpdateController::class)->name('category.update');
        Route::delete('/{category}', \App\Http\Controllers\Admin\Product\DeleteController::class)->name('category.delete');
    });
    Route::group(['prefix' => 'products'], function () {
        Route::get('/', \App\Http\Controllers\Admin\Product\IndexController::class)->name('product.index');
        Route::get('/create', \App\Http\Controllers\Admin\Product\CreateController::class)->name('product.create');
        Route::post('/', \App\Http\Controllers\Admin\Product\StoreController::class)->name('product.store');
        Route::get('/{products}', \App\Http\Controllers\Admin\Product\ShowController::class)->name('product.show');
        Route::get('/{products}/edit', \App\Http\Controllers\Admin\Product\EditController::class)->name('product.edit');
        Route::patch('/{products}', \App\Http\Controllers\Admin\Product\UpdateController::class)->name('product.update');
        Route::delete('/{products}', \App\Http\Controllers\Admin\Product\DeleteController::class)->name('product.delete');
    });
});
