<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});
// ->middleware(['auth', 'verified'])->name('dashboard')

Route::get('/users', function () {
    return view('users/index');
});

Route::get('/users/create', function () {
    return view('users/create');
});

Route::get('/users/edit', function () {
    return view('users/edit');
});

Route::get('/booking', function () {
    return view('booking/index');
});

Route::get('/booking/create', function () {
    return view('booking/create');
});

Route::get('/booking/edit', function () {
    return view('booking/edit');
});

Route::get('/reports', function () {
    return view('reports/index');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
