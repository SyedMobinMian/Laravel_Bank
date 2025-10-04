<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\SettingsController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes(); // Includes login, registration, password reset, and email verification routes


Route::middleware(['auth', 'role:admin'])->group(function () {
    // Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
});


// Home Route
Route::get('/home', [HomeController::class, 'index'])->name('home');


// Dashboard Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('/settings', [SettingsController::class, 'index'])->name('settings');
});

// User Role
Route::middleware(['auth', 'role:super_admin'])->group(function () {
    Route::get('/settings/add-user', [SettingsController::class, 'showAddUserForm'])->name('settings.addUserForm');
    Route::post('/settings/add-user', [SettingsController::class, 'addUser'])->name('settings.addUser');
});

// Error Routes
Route::fallback([ErrorController::class, 'notFound']); // Handles 404 errors

