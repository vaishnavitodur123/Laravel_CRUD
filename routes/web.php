<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{product}/update', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{product}/destroy', [ProductController::class, 'destroy'])->name('products.destroy');
Route::get('/products/{id}/restore', [ProductController::class, 'restore'])->name('products.restore');
Route::get('/products/trash', [ProductController::class, 'trash'])
    ->name('products.trash');
Route::get('products/{id}/forcedelete', [ProductController::class, 'forcedelete'])->name('products.forcedelete');

