<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Models\Product;

Route::get('/products', [ProductController::class, 'create']);
Route::get('/get/products', [CategoryController::class, 'getProducts']);
Route::get('/get/categories/{id}', [CategoryController::class, 'getCategories']);
Route::get('/create-categories', [ProductController::class, 'createCategories']);