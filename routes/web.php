<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('/registration', [AuthController::class, 'Registration']);

Route::post('/registration', [AuthController::class, 'RegistrationStore']);

Route::get('/login', [AuthController::class, 'Login']);

Route::post('/login', [AuthController::class, 'LoginStore']);

Route::get('/forgotPassword', [AuthController::class, 'ForgotPassword']);

Route::group(['middleware' => 'superAdmin'], function() {
    
});

Route::group(['middleware' => 'admin'], function() {

});

Route::group(['middleware' => 'user'], function() {

});
