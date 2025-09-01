<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PaymentController;

Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');

Route::resource('clients', ClientController::class);
Route::resource('projects', ProjectController::class);
Route::resource('payments', PaymentController::class);
