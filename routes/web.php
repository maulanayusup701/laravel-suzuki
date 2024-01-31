<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\AuthController;
use App\Http\Controllers\web\UserController;
use App\Http\Controllers\web\ProductController;
use App\Http\Controllers\web\CarousellController;
use App\Http\Controllers\Web\DashboardController;
use App\Http\Controllers\web\InformationController;
use App\Http\Controllers\web\LandingPageController;
use App\Http\Controllers\web\TestimonialController;

Route::get('/', [LandingPageController::class, 'index']);

Route::controller(AuthController::class)->group(function () {
    Route::middleware(['guest'])->group(function () {
        Route::get('login', 'login')->name('login');
        Route::post('login-store', 'loginStore'); 
    });
    Route::middleware(['auth'])->group(function () {
        Route::post('logout', 'logout'); 
    });
});

Route::middleware(['auth'])->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('dashboard', 'dashboard');
    });
    Route::resource('dashboard/product', ProductController::class);
    Route::resource('dashboard/information', InformationController::class);
    Route::resource('dashboard/user', UserController::class);
    Route::resource('dashboard/testimonial', TestimonialController::class);
    Route::resource('dashboard/carousell', CarousellController::class);
});