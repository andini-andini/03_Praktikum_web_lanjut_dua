<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;


// Route::get('/', [PostController::class, 'index'])->name('post.index');

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/category', [ProductsController::class, 'index'])->name('category.index');

Route::get('/promotion', [PromotionController::class, 'index'])->name('promotion.index');

Route::resource('contact-us', ContactUsController::class);
