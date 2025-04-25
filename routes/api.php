<?php

use App\Http\Controllers\API\UserAPIController;
use Illuminate\Support\Facades\Route;

Route::controller(UserAPIController::class)->prefix('/user')->group(function () {
    Route::get('/', 'index');
    Route::get('/{id}', 'show');
    Route::post('/', 'store');
    Route::put('/{id}', 'update');
    Route::delete('/{id}', 'destroy');
});