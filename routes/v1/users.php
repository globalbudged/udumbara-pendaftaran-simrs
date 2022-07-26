<?php

use App\Http\Controllers\Api\v1\UserController;
use Illuminate\Support\Facades\Route;

// Route::middleware('auth:sanctum')
//     ->group(function () {
//         Route::get('/me', [UserController::class, 'me']); 
//     });

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/show/{user}', [UserController::class, 'show']);
