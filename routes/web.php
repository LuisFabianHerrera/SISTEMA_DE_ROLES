<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

Route::get('/', [LoginController::class, 'index']);

Route::post('/login', [LoginController::class, 'login']);

Route::get('/logout', [LoginController::class, 'logout']);

Route::middleware('admin')->group(function () {

    Route::get('/admin', [AdminController::class, 'index']);

});

Route::get('/perfil', [UserController::class, 'perfil']);