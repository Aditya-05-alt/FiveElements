<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'index'])->name('home');
Route::post('/contact', [MainController::class, 'storeMessage'])->name('contact.store');
Route::post('/login', [MainController::class, 'login'])->name('admin.login');
Route::get('/logout', [MainController::class, 'logout'])->name('admin.logout');
Route::post('/upload', [MainController::class, 'upload'])->name('admin.upload');
Route::get('/metals', [MainController::class, 'metals'])->name('metals.page');
Route::get('/antiques', [MainController::class, 'antiques'])->name('antiques.page');