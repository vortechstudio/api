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
});
