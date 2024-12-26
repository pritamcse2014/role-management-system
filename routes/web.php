<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('/registration', [AuthController::class, 'Registration']);

Route::post('/registration', [AuthController::class, 'RegistrationStore']);

Route::get('/login', [AuthController::class, 'Login']);

Route::post('/login', [AuthController::class, 'LoginStore']);

Route::get('/forgotPassword', [AuthController::class, 'ForgotPassword']);

Route::post('/forgotPassword', [AuthController::class, 'ForgotPasswordStore']);

Route::group(['middleware' => 'superAdmin'], function() {
    Route::get('superadmin/dashboard', [DashboardController::class, 'Dashboard']);
});

Route::group(['middleware' => 'admin'], function() {
    Route::get('admin/dashboard', [DashboardController::class, 'Dashboard']);
});

Route::group(['middleware' => 'user'], function() {
    Route::get('user/dashboard', [DashboardController::class, 'Dashboard']);
});

Route::get('/logout', [AuthController::class, 'Logout']);
