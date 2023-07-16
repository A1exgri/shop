<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', \App\Http\Controllers\Main\IndexController::class)->name('main.index');

Route::group(['prefix' => 'categories'], function() {
    Route::get('/', \App\Http\Controllers\Category\IndexController::class)->name('category.index');
    Route::get('/create', \App\Http\Controllers\Category\CreateController::class)->name('category.create');
    Route::post('/', \App\Http\Controllers\Category\StoreController::class)->name('category.store');
    Route::get('/{category}/edit', \App\Http\Controllers\Category\EditController::class)->name('category.edit');
    Route::get('/{category}', \App\Http\Controllers\Category\ShowController::class)->name('category.show');
    Route::patch('/{category}', \App\Http\Controllers\Category\UpdateController::class)->name('category.update');
    Route::delete('/{category}', \App\Http\Controllers\Category\DeleteController::class)->name('category.delete');
});

Route::group(['prefix' => 'colors'], function() {
    Route::get('/', [\App\Http\Controllers\ColorController::class, 'index'])->name('color.index');
    Route::get('/create', [\App\Http\Controllers\ColorController::class, 'create'])->name('color.create');
    Route::post('/', [\App\Http\Controllers\ColorController::class, 'store'])->name('color.store');
    Route::get('/{color}/edit', [\App\Http\Controllers\ColorController::class, 'edit'])->name('color.edit');
    Route::get('/{color}', [\App\Http\Controllers\ColorController::class, 'show'])->name('color.show');
    Route::patch('/{color}', [\App\Http\Controllers\ColorController::class, 'update'])->name('color.update');
    Route::delete('/{color}', [\App\Http\Controllers\ColorController::class, 'delete'])->name('color.delete');
});

Route::group(['prefix' => 'tags'], function() {
    Route::get('/', [\App\Http\Controllers\TagController::class, 'index'])->name('tag.index');
    Route::get('/create', [\App\Http\Controllers\TagController::class, 'create'])->name('tag.create');
    Route::post('/', [\App\Http\Controllers\TagController::class, 'store'])->name('tag.store');
    Route::get('/{tag}/edit', [\App\Http\Controllers\TagController::class, 'edit'])->name('tag.edit');
    Route::get('/{tag}', [\App\Http\Controllers\TagController::class, 'show'])->name('tag.show');
    Route::patch('/{tag}', [\App\Http\Controllers\TagController::class, 'update'])->name('tag.update');
    Route::delete('/{tag}', [\App\Http\Controllers\TagController::class, 'delete'])->name('tag.delete');
});

Route::group(['prefix' => 'users'], function() {
    Route::get('/', [\App\Http\Controllers\UserController::class, 'index'])->name('user.index');
    Route::get('/create', [\App\Http\Controllers\UserController::class, 'create'])->name('user.create');
    Route::post('/', [\App\Http\Controllers\UserController::class, 'store'])->name('user.store');
    Route::get('/{user}/edit', [\App\Http\Controllers\UserController::class, 'edit'])->name('user.edit');
    Route::get('/{user}', [\App\Http\Controllers\UserController::class, 'show'])->name('user.show');
    Route::patch('/{user}', [\App\Http\Controllers\UserController::class, 'update'])->name('user.update');
    Route::delete('/{user}', [\App\Http\Controllers\UserController::class, 'delete'])->name('user.delete');
});

Route::group(['prefix' => 'products'], function() {
    Route::get('/', [\App\Http\Controllers\ProductController::class, 'index'])->name('product.index');
    Route::get('/create', [\App\Http\Controllers\ProductController::class, 'create'])->name('product.create');
    Route::post('/', [\App\Http\Controllers\ProductController::class, 'store'])->name('product.store');
    Route::get('/{product}/edit', [\App\Http\Controllers\ProductController::class, 'edit'])->name('product.edit');
    Route::get('/{product}', [\App\Http\Controllers\ProductController::class, 'show'])->name('product.show');
    Route::patch('/{product}', [\App\Http\Controllers\ProductController::class, 'update'])->name('product.update');
    Route::delete('/{product}', [\App\Http\Controllers\ProductController::class, 'delete'])->name('product.delete');
});
