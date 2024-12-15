<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AnalisaController;
use App\Http\Controllers\CuacaController;

// Halaman Utama
Route::get('/', function () {
    return view('welcome');
});

// Autentikasi
Route::get('/register', [UsersController::class, 'showRegisterForm'])->name('register');
Route::post('/register/submit', [UsersController::class, 'register'])->name('register.submit');

Route::get('/login', [UsersController::class, 'showLoginForm'])->name('login');
Route::post('/login/submit', [UsersController::class, 'login'])->name('login.submit');
Route::post('/logout', [UsersController::class, 'logout'])->name('logout');

// Dashboard
Route::get('/dashboard', action: [DashboardController::class, 'showDashboard'])->name('dashboard');

// CRUD Lahan
Route::post('/dashboard/submit-lahan', [DashboardController::class, 'submitLahan'])->name('dashboard.submitLahan');
Route::get('/dashboard/lahan/{id}/edit', [DashboardController::class, 'editLahan'])->name('dashboard.editLahan');
Route::put('/dashboard/lahan/{id}', [DashboardController::class, 'updateLahan'])->name('dashboard.updateLahan');
Route::delete('/dashboard/lahan/{id}', [DashboardController::class, 'deleteLahan'])->name('dashboard.deleteLahan');

// CRUD Stok
Route::post('/dashboard/submit-stok', [DashboardController::class, 'submitStok'])->name('dashboard.submitStok');
Route::get('/dashboard/edit-stok/{id}', [DashboardController::class, 'editStok'])->name('dashboard.editStok');
Route::put('/dashboard/update-stok/{id}', [DashboardController::class, 'updateStok'])->name('dashboard.updateStok');
Route::delete('/dashboard/delete-stok/{id}', [DashboardController::class, 'deleteStok'])->name('dashboard.deleteStok');

// Pengaturan Akun
Route::get('/setting', [UsersController::class, 'showAccountForm'])->name('account');
Route::put('/setting/update/{id}', [UsersController::class, 'update'])->name('account.update');


Route::get('/setting/dashboard', [UsersController::class, 'showDashboardAccountForm'])->name('setting.dashboard-account');

// Analisa
Route::get('/analisa', [AnalisaController::class, 'showAnalisaForm'])->name('analisa');

// Cuaca
Route::get('/cuaca', [CuacaController::class, 'showCuacaForm'])->name('cuaca');
