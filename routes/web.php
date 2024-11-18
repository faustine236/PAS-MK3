<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/product/{slug}', [ProductController::class, 'show'])->name('product.show');

Route::get('/check-booking', [BookingController::class, 'check'])->name('booking.check');

Route::get('/about', [AboutController::class, 'index'])->name('about');
