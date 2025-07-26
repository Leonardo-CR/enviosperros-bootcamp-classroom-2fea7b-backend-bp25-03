<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;




Route::prefix('client')->group(function () {
    Route::get('index', [ClientsController::class, 'index'])
        ->name('clients.index');

    Route::delete('{user}/destroy', [ClientsController::class, 'delete'])
        ->name('clients.destroy');
});

Route::prefix('pacient')->group(function(){
    Route::get();
    Route::delete();
    Route::post();
});

