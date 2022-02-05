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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['auth'])->group(function () {
    Route::prefix('administration')->group(function () {
        Route::get('dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
        Route::resource('category', App\Http\Controllers\CategoryController::class);
        Route::resource('product', App\Http\Controllers\ProductController::class);
        Route::resource('slider', App\Http\Controllers\SliderController::class);
        Route::resource('user', App\Http\Controllers\UserController::class);
        

        Route::get('setting', [App\Http\Controllers\SettingController::class, 'index'])->name('setting.index');
        Route::post('setting/{id}', [App\Http\Controllers\SettingController::class, 'update'])->name('setting.update');
    });
});
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

