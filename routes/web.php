<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\ParkingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

/**User */
Route::get('/', [UserController::class, 'login']);
Route::post('/login', [UserController::class, 'loginpage'])->name('login');
Route::get('/welcome', function () {
    return view('welcome');
})->name('dashboard');

/** Event*/
Route::get('/index', [EventController::class, 'index'])->name('events.index');
Route::get('/createevent', [EventController::class, 'create'])->name('eventcreate');
Route::post('/storeevent', [EventController::class, 'store'])->name('eventstore');
Route::get('/event', [EventController::class, 'index'])->name('event');
Route::get('/detail', [EventController::class, 'detail'])->name('eventdetail');

/** Parking */
Route::get('/parking', [ParkingController::class, 'index'])->name('parking');
Route::get('/createparking', [ParkingController::class, 'create'])->name('parkingcreate');
Route::post('/storeparking', [ParkingController::class, 'store'])->name('parkingstore');
Route::get('/user', [UserController::class, 'index']);
