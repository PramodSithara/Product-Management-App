<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

//Route for Rendering index.blade.php
Route::get('/', [ProductController::class, 'index'])-> name('product.index');

//Route for Rendering create.blade.php 
Route::get('/product/create', [ProductController::class, 'create'])-> name('product.create');

//Route for save products
Route::post('/product', [ProductController::class, 'store'])-> name('product.store');

//Route for Show Edit products details
Route::get('/product/{product}/edit', [ProductController::class, 'edit'])-> name('product.edit');

//Routes for Update Products with new Values
Route::put('/product/{product}/update', [ProductController::class, 'update'])-> name('product.update');

//Routes for Delete selected product
Route::delete('/product/{product}/delete', [ProductController::class, 'delete'])-> name('product.delete');
