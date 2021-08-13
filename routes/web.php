<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DirectController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

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

// Home
Route::get('/', [WelcomeController::class, 'index']);

// Login & Register
Route::get('/member/login', [AuthController::class, 'formLogin'])->name('login');
Route::post('/member/login', [AuthController::class, 'login'])->name('login.auth');

Route::get('/member/register', [AuthController::class, 'formRegister'])->name('register');
Route::post('/member/register', [AuthController::class, 'register'])->name('register.auth');

// Direct Link
Route::get('/{short_link}', [DirectController::class, 'direct'])->name('redirect');

// Ketika sudah login
Route::group(['middleware' => 'auth'], function () {
    // Dashboard
    Route::get('/member/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Links
    Route::resource('/member/links', LinkController::class);

    // Users
    Route::get('/member/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::get('/member/profile/{id}/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/member/profile/{id}', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/member/profile/ganti-password', [ProfileController::class, 'change_password'])->name('profile.password');
    Route::post('/member/profile', [ProfileController::class, 'update_password'])->name('profile.update.password');


    // Logout
    Route::get('/member/logout', [AuthController::class, 'logout'])->name('logout');
});
