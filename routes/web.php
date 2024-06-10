<?php

use App\Http\Controllers\AlternativeProductController;
use App\Http\Controllers\FeedbackController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductBoikotController;
use App\Http\Controllers\TypeController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'dashboard']);

Route::prefix('user')->name('user.')->controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');

    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::put('/update/{id}', 'update')->name('update');
    Route::delete('/destroy/{id}', 'destroy')->name('destroy');
});
Route::prefix('product')->name('product.')->controller(ProductBoikotController::class)->group(function () {
    Route::get('/list', 'index')->name('list');
    Route::get('/show/{id}', 'show')->name('show');

    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');

    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::put('/update/{id}', 'update')->name('update');
    Route::delete('/destroy/{id}', 'destroy')->name('destroy');
});

Route::prefix('alternative')->name('alternative.')->controller(AlternativeProductController::class)->group(function () {
    Route::get('/list', 'index')->name('list');
    Route::get('/show/{id}', 'show')->name('show');

    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');

    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::put('/update/{id}', 'update')->name('update');
    Route::delete('/destroy/{id}', 'destroy')->name('destroy');
});

Route::prefix('type')->name('type.')->controller(TypeController::class)->group(function () {
    Route::get('/list', 'index')->name('list');
    Route::get('/show/{id}', 'show')->name('show');

    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');

    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::put('/update/{id}', 'update')->name('update');
    Route::delete('/destroy/{id}', 'destroy')->name('destroy');
});

Route::prefix('feedback')->name('feedback.')->controller(FeedbackController::class)->group(function () {
    Route::get('/list', 'index')->name('list');
    Route::put('/accept/{id}', 'accept')->name('accept');
    Route::delete('/destroy/{id}', 'destroy')->name('destroy');
});
