<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisteredUserController;

Route::get('/', [JobController::class, 'index']);

// Register
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

// Login & Logout
Route::get('/login', [SessionController::class, 'create']);
Route::get('/login', [SessionController::class, 'store']);
Route::get('/logout', [SessionController::class, 'destroy']);