<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/loginuser', [UserController::class, 'loginuser'])->name('loginuser');
Route::post('/register', [UserController::class, 'register'])->name('register');

Route::get('/event', [EventController::class, 'event'])->name('event');
Route::get('/show/{id}', [EventController::class, 'show'])->
name('show');
Route::post('/reservation', [ReservationController::class, 'store'])->name('reservation');
