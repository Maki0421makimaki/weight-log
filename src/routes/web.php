<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogController;


Route::get('/weight_logs', [LogController::class, 'index']);

Route::post('/weight_logs', [LogController::class, 'store'])->name('weight_logs.store');
