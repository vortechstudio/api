<?php
use Illuminate\Support\Facades\Route;

Route::prefix('account')->as('account')->group(function () {
    Route::get('/profil', \App\Http\Controllers\Account\ProfilController::class);
    Route::put('/profil/update');
});
