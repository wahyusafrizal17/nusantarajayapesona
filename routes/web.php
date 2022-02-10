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

Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('catalog/{slug}', [App\Http\Controllers\HomeController::class, 'catalog'])->name('category.list');
Route::get('product/{slug}', [App\Http\Controllers\HomeController::class, 'detail'])->name('catalog.detail');

Route::middleware(['auth'])->group(function () {
    Route::prefix('administration')->group(function () {
        Route::get('dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
        Route::resource('category', App\Http\Controllers\CategoryController::class);
        Route::get('category/{id}/is_active', [App\Http\Controllers\CategoryController::class, 'active'])->name('category.active');
        Route::resource('product', App\Http\Controllers\ProductController::class);
        Route::get('product/{id}/is_active', [App\Http\Controllers\ProductController::class, 'active'])->name('product.active');
        Route::resource('slider', App\Http\Controllers\SliderController::class);
        Route::get('slider/{id}/is_active', [App\Http\Controllers\SliderController::class, 'active'])->name('slider.active');
        Route::resource('user', App\Http\Controllers\UserController::class);
        
        Route::get('images/{id}', [App\Http\Controllers\ProductController::class, 'images'])->name('images.destroy');        

        Route::get('setting', [App\Http\Controllers\SettingController::class, 'index'])->name('setting.index');
        Route::post('setting/{id}', [App\Http\Controllers\SettingController::class, 'update'])->name('setting.update');
    });
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

