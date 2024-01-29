<?php

use Illuminate\Http\Request;
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

Route::middleware(['apiauth'])->prefix(config('api.version'))->group(function () {
    Route::get('/online', function () {
        return response()->json([
            "message" => "API is online"
        ], 200);
    });
});
