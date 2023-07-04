<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

Route::view('/', 'landing')->name('landing');
Route::view('/login', 'auth.login')->name('login');
Route::view('/register', 'auth.register')->name('register');
Route::view('/success', 'auth.success')->name('success');

Route::controller(AuthController::class)->prefix('auth')->name('auth.')->group(function () {
    Route::post('/register', 'register')->name('register');
    Route::post('/login', 'login')->name('login');
    Route::post('/logout', 'logout')->name('logout');
});


Route::middleware(['auth', 'active'])->group(function () {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::put('/users/{user}', UserController::class)->name('users.update');
});
