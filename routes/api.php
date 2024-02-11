<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/online', function () {
    return response()->json([
        'message' => 'API is online',
    ], 200);
});

Route::prefix('auth')->group(function () {
    Route::post('/login', \App\Http\Controllers\Auth\LoginController::class);
    Route::delete('/logout', \App\Http\Controllers\Auth\LogoutController::class)->middleware(['auth:sanctum']);
    Route::post('/register', \App\Http\Controllers\Auth\RegisterController::class);

    Route::prefix('otp')->middleware(['auth:sanctum'])->group(function () {
        Route::post('/activate', [\App\Http\Controllers\Auth\OtpController::class, 'activate']);
        Route::post('/send', [\App\Http\Controllers\Auth\OtpController::class, 'sending']);
        Route::post('/checkout', [\App\Http\Controllers\Auth\OtpController::class, 'checkout']);
    });
});

Route::middleware(['auth:sanctum'])->group(function () {
    include_once 'api/account.php';
});
