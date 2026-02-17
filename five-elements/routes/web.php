<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'index'])->name('home');
Route::post('/contact', [MainController::class, 'storeMessage'])->name('contact.store');

// Login Logic
Route::post('/login', [MainController::class, 'login'])->name('admin.login');
Route::get('/logout', [MainController::class, 'logout'])->name('admin.logout');

// Dashboard & Upload (Protected)
Route::get('/dashboard', [MainController::class, 'dashboard'])->name('admin.dashboard'); // <--- NEW ROUTE
Route::post('/upload', [MainController::class, 'upload'])->name('admin.upload');
Route::get('/admin/view/{id}', [MainController::class, 'viewDocument'])->name('admin.view');