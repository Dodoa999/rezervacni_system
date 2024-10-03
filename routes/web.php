<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::view('/', 'pages.index');





Route::get('/login', [AuthController::class, 'show']);



Route::get('/register', [AuthController::class, 'register']);

Route::post('/login', [AuthController::class, 'login']);

