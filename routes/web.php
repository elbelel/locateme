<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;


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

Route::get('/', [ProductController::class, 'dashboard'])->name('dashboardbooking');

Route::get('/product-details', function () {
    return view('product-details');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard',[ProductController::class, 'index'])->name('index');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


Route::get('/product',[ProductController::class, 'index'])->name('index');
Route::get('/product/create',[ProductController::class, 'create'])->name('productcreate');
Route::post('/product/store',[ProductController::class, 'store'])->name('productstore');
Route::get('/product/edit/{id}',[ProductController::class, 'edit'])->name('productedit');
Route::post('/product/update',[ProductController::class, 'update'])->name('productupdate');

Route::get('/shop',[ShopController::class, 'index'])->name('index');
Route::get('/shop/create',[ShopController::class, 'create'])->name('shopcreate');
Route::post('/shop/store',[ShopController::class, 'store'])->name('shopstore');
Route::get('/shop/edit/{id}',[ShopController::class, 'edit'])->name('shopedit');
Route::post('/shop/update',[ShopController::class, 'update'])->name('shopupdate');

Route::get('/users',[UserController::class, 'index'])->name('all');
Route::get('/users/create',[UserController::class, 'create'])->name('usercreate');
Route::post('/users/store',[UserController::class, 'store'])->name('userstore');
Route::get('/users/edit/{id}',[UserController::class, 'edit'])->name('useredit');
Route::post('/users/update',[UserController::class, 'update'])->name('userupdate');

});
        




require __DIR__.'/auth.php';
