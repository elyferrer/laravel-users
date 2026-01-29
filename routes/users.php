<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AuthMiddleware;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => '',
    'as' => 'user.'
], function () {
    Route::middleware([AuthMiddleware::class])->get('/', [DashboardController::class, 'index'])
        ->name('home');

    Route::match(['GET', 'POST'], '/user/login', [UserController::class, 'login'])->name('login');
    Route::get('/user/register', [UserController::class, 'register'])->name('register');
    Route::post('/user', [UserController::class, 'store'])->name('store');
    Route::delete('/logout', [UserController::class, 'logout'])->name('logout');
});