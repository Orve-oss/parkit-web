<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\ParkingController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

/**User */
Route::get('/', [UserController::class, 'login']);
Route::post('/login', [UserController::class, 'loginpage'])->name('login');
Route::get('/welcome', [WelcomeController::class, 'index'])->name('dashboard');
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

/** Event*/
Route::get('/index', [EventController::class, 'index'])->name('events.index');
Route::get('/createevent', [EventController::class, 'create'])->name('eventcreate');
Route::post('/storeevent', [EventController::class, 'store'])->name('eventstore');
Route::get('/event', [EventController::class, 'index'])->name('event');
Route::get('/detail', [EventController::class, 'detail'])->name('eventdetail');

/** Parking */
Route::get('/parking', [ParkingController::class, 'index'])->name('parkings.index');
Route::get('/createparking', [ParkingController::class, 'create'])->name('parkingcreate');
Route::post('/storeparking', [ParkingController::class, 'store'])->name('parkingstore');
Route::get('/user', [UserController::class, 'index']);

/**Reservation */
Route::get('/reservation', [ReservationController::class, 'index'])->name('reservations.index');
