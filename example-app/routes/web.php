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
    return view('main.index');
})->name('layouts.main');
//Route::get('/', \App\Http\Controllers\Controller::class)->name('layouts.main');

Route::group(['prefix' => 'admin'], function () {
    Route::group(['prefix' => 'categories'], function () {
        Route::get('/', \App\Http\Controllers\Admin\Category\IndexController::class)->name('category.index');
        Route::get('/create', \App\Http\Controllers\Admin\Category\CreateController::class)->name('category.create');
        Route::post('/', \App\Http\Controllers\Admin\Category\StoreController::class)->name('category.store');
        Route::get('/{category}', \App\Http\Controllers\Admin\Category\ShowController::class)->name('category.show');
        Route::get('/{category}/edit', \App\Http\Controllers\Admin\Category\EditController::class)->name('category.edit');
        Route::patch('/{category}', \App\Http\Controllers\Admin\Category\UpdateController::class)->name('category.update');
        Route::delete('/{category}', \App\Http\Controllers\Admin\Category\DeleteController::class)->name('category.delete');
    });
    Route::group(['prefix' => 'products'], function () {
        Route::get('/', \App\Http\Controllers\Admin\Product\IndexController::class)->name('product.index');
        Route::get('/create', \App\Http\Controllers\Admin\Product\CreateController::class)->name('product.create');
        Route::post('/', \App\Http\Controllers\Admin\Product\StoreController::class)->name('product.store');
        Route::get('/{product}', \App\Http\Controllers\Admin\Product\ShowController::class)->name('product.show');
        Route::get('/{product}/edit', \App\Http\Controllers\Admin\Product\EditController::class)->name('product.edit');
        Route::patch('/{product}', \App\Http\Controllers\Admin\Product\UpdateController::class)->name('product.update');
        Route::delete('/{product}', \App\Http\Controllers\Admin\Product\DeleteController::class)->name('product.delete');
    });
});
//Route::group(['prefix' => 'customers'], function () {
//    Route::get('/', \App\Http\Controllers\Customer\IndexController::class)->name('customer.index');
//    Route::get('/create', \App\Http\Controllers\Customer\CreateController::class)->name('customer.create');
//    Route::post('/', \App\Http\Controllers\Customer\StoreController::class)->name('customer.store');
//    Route::get('/{customer}', \App\Http\Controllers\Customer\ShowController::class)->name('customer.show');
//    Route::get('/{customer}/edit', \App\Http\Controllers\Customer\EditController::class)->name('customer.edit');
//    Route::patch('/{customer}', \App\Http\Controllers\Customer\UpdateController::class)->name('customer.update');
//    Route::delete('/{customer}', \App\Http\Controllers\Customer\DeleteController::class)->name('customer.delete');
//});
Route::group(['prefix' => 'users'], function () {
    Route::get('/', \App\Http\Controllers\User\IndexController::class)->name('user.index');
    Route::get('/create', \App\Http\Controllers\User\CreateController::class)->name('user.create');
    Route::post('/', \App\Http\Controllers\User\StoreController::class)->name('user.store');
    Route::get('/{user}', \App\Http\Controllers\User\ShowController::class)->name('user.show');
    Route::get('/{user}/edit', \App\Http\Controllers\User\EditController::class)->name('user.edit');
    Route::patch('/{user}', \App\Http\Controllers\User\UpdateController::class)->name('user.update');
    Route::delete('/{user}', \App\Http\Controllers\User\DeleteController::class)->name('user.delete');
});
