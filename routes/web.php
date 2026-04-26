<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'landing']);
Route::get('/landing-page', [PageController::class, 'landing']);
Route::get('/lapak', [PageController::class, 'lapak']);
Route::get('/login', [PageController::class, 'login']);
Route::post('/login', [PageController::class, 'prosesLogin']);
Route::get('/register', [PageController::class, 'register']);
Route::post('/register', [PageController::class, 'prosesRegister']);
Route::get('/dashboard', [PageController::class, 'dashboard']);
Route::post('/dashboard', [PageController::class, 'dashboard']);
Route::get('/profile', [PageController::class, 'profile']);
Route::get('/pengelolaan', [PageController::class, 'pengelolaan']);
Route::get('/logout', [PageController::class, 'logout']);
