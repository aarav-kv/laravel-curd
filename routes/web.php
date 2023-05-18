<?php

use illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, 'index']);
Route::post('add', [UserController::class, 'store']);
Route::view('register', "addUser");
Route::get('/delete/{id}', [UserController::class, 'delete']);
Route::get('/edit/{id}', [UserController::class, 'edit']);

Route::put('/update/{id}', [UserController::class, 'update']);

// Route::put('/update');
