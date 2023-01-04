<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookingTimeSlotController;


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

Route::get('/', [BookingController::class, 'dashboard'])->name('dashboardbooking');

Route::get('/reports', function () {
    return view('reports/index');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


Route::get('/booking',[BookingController::class, 'index'])->name('index');
Route::get('/booking/create',[BookingController::class, 'create'])->name('bookingcreate');
Route::post('/booking/store',[BookingController::class, 'store'])->name('bookingstore');
Route::get('/booking/edit/{id}',[BookingController::class, 'edit'])->name('bookingedit');
Route::post('/booking/update',[BookingController::class, 'update'])->name('bookingupdate');

Route::get('/users',[UserController::class, 'index'])->name('all');
Route::get('/users/create',[UserController::class, 'create'])->name('usercreate');
Route::post('/users/store',[UserController::class, 'store'])->name('userstore');
Route::get('/users/edit/{id}',[UserController::class, 'edit'])->name('useredit');
Route::post('/users/update',[UserController::class, 'update'])->name('userupdate');

Route::get('/book/{id}', [BookingTimeSlotController::class, 'index'])->name('index');
Route::get('/book-date/{id}',[BookingTimeSlotController::class, 'create'])->name('showbookings');
Route::post('/book-confirm',[BookingTimeSlotController::class, 'store'])->name('userbookings');
Route::post('/check-slot/{id}',[BookingTimeSlotController::class, 'edit'])->name('checkbookings');
Route::post('/book-payment-type',[BookingTimeSlotController::class, 'update'])->name('bookingsconfirm');

});
        

Route::get('/client-booking', function () {
    return view('client-bookings/index');
});



require __DIR__.'/auth.php';


// Route::get('/book', function () {
//     return view('client-book/book');
// });

// Route::get('/book-date', function () {
//     return view('client-book/date');
// });

// Route::get('/book-confirm', function () {
//     return view('client-book/confirm');
// });

// Route::get('/book-payment-type', function () {
//     return view('client-book/payment');
// });

Route::get('/book-payment-response', function () {
    return view('client-book/feedback');
});