<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\ParkingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', function () {
    return view('events.index');
});
Route::get('/createevent', [EventController::class, 'create'])->name('eventcreate');
Route::get('/parking', [ParkingController::class, 'index'])->name('parking');
Route::get('/createparking', [ParkingController::class, 'create'])->name('parkingcreate');
Route::get('/user', [UserController::class, 'index']);
