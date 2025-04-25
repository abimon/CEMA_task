<?php

use App\Http\Controllers\EnrollController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::resources([
        'clients' => UserController::class,
        'programs'=>ProgramController::class,
        'enrollments'=>EnrollController::class
    ]);
    Route::get('/profile', function () {
        return view('user.profile', [
            'user' => Auth::user(),
        ]);
    })->name('profile');
});