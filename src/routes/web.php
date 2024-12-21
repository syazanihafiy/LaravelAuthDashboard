<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

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

// Login page
Route::get('/', [AuthController::class, 'loginPage'])->name('login.form');

// Handle login
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Handle logout
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard with middleware
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('token.exist')->name('dashboard');
