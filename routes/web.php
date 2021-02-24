<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;

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

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::group(['prefix' => 'products'], function () {
  Route::get('/', [ProductsController::class, 'index'])->name('products.index');
  Route::get('/{products}', [ProductsController::class, 'showProducts'])->name('products.showproducts');
});

Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/{news}', [NewsController::class, 'show'])->name('news.show');

Route::group(['prefix' => 'program'], function () {
  Route::get('/{program}', [ProgramController::class, 'listProgram'])->name('program.list');
});

Route::get('/about-us', [AboutUsController::class, 'index'])->name('aboutus.index');
Route::resource('contact-us', ContactUsController::class);

// Route::get('/', function () {
//     return view('welcome');
// });

