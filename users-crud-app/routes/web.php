<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
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
    return view('home');
})->name('home');

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');

Route::post('/logout', [AuthController::class, 'web_logout'])->name('logout');

Route::get('/login', [AuthController::class, 'web_login'])->name('login');
Route::post('/login', [AuthController::class, 'user_login']);

Route::get('/register', [AuthController::class, 'web_register'])->name('register');
Route::post('/register', [AuthController::class, 'user_register']);

Route::get('/users', [UserController::class, 'web_index'])->name('users');
// Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');