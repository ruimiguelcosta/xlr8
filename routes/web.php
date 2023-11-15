<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('login', function () {
    redirect('/admin');
})->name('login');

Route::get('/', [SiteController::class, 'all']);
Route::get('/hotels/{id}', [SiteController::class, 'show']);
