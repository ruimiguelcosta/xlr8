<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::middleware('throttle:rate_limit,10')->post('login', [AuthController::class, 'login']);

Route::middleware(['auth:sanctum', 'throttle:rate_limit,600'])->group(function () {
    Route::get('/hotels', [ApiController::class, 'all']);
    Route::get('/hotels/{id}', [ApiController::class, 'show']);
});
