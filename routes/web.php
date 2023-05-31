<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

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

Route::get('/', [PageController::class,'index'])->name('home');

Route::get('/shop', [ProductController::class,'index'])->name('shop');

Route::get('/shop/{id}', [ProductController::class,'show'])->name('product');

Route::get('/cart',[CartController::class,'cart'])->name('cart');

Route::get('/add-to-cart/{id}',[CartController::class,'addToCart'])->name('add.to.cart');

Route::get('/delete-from-cart/{id}',[CartController::class,'delete'])->name('delete.from.cart');
Route::post('/update-from-cart/{id}', [CartController::class, 'update'])->name('update.from.cart');




