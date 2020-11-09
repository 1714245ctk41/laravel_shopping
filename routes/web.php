<?php

use App\Http\Controllers\AdminProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\SliderController;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/home', function () {
//     return view('home');
// });

Route::prefix('admin')->group(function () {
    Route::prefix('categories')->group(function () {
        Route::get('/', [CategoryController::class, 'index'])->name('categories.index');
        Route::post('/store', [CategoryController::class, 'store'])->name('categories.store');
        Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
        Route::get('/delete/{id}', [CategoryController::class, 'delete'])->name('categories.delete');
        Route::POST('/update/{id}', [CategoryController::class, 'update'])->name('categories.update');
        Route::get('/create', [CategoryController::class, 'create'])->name('categories.create');
    });

    Route::prefix('menus')->group(function () {
        Route::get('/', [MenuController::class, 'index'])->name('menus.index');
        Route::post('/store', [MenuController::class, 'store'])->name('menus.store');
        Route::get('/edit/{id}', [MenuController::class, 'edit'])->name('menus.edit');
        Route::get('/delete/{id}', [MenuController::class, 'delete'])->name('menus.delete');
        Route::POST('/update/{id}', [MenuController::class, 'update'])->name('menus.update');
        Route::get('/create', [MenuController::class, 'create'])->name('menus.create');
    });

    Route::prefix('Adminproduct')->group(function () {
        Route::get('/', [AdminProductController::class, 'index'])->name('product.index');
        Route::post('/store', [AdminProductController::class, 'store'])->name('product.store');
        Route::get('/edit/{product}', [AdminProductController::class, 'edit'])->name('product.edit');
        Route::get('/delete/{product}', [AdminProductController::class, 'delete'])->name('product.delete');
        Route::POST('/update/{product}', [AdminProductController::class, 'update'])->name('product.update');
        Route::get('/create', [AdminProductController::class, 'create'])->name('product.create');
    });

    Route::prefix('slider')->group(function () {
        Route::get('/', [SliderController::class, 'index'])->name('slider.index');
        Route::post('/store', [SliderController::class, 'store'])->name('slider.store');
        Route::get('/edit/{id}', [SliderController::class, 'edit'])->name('slider.edit');
        Route::get('/delete/{id}', [SliderController::class, 'delete'])->name('slider.delete');
        Route::POST('/update/{id}', [SliderController::class, 'update'])->name('slider.update');
        Route::get('/create', [SliderController::class, 'create'])->name('slider.create');
    });
});


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');