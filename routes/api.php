<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::post(uri: '/register', action: [UserController::class, 'register'])->name('register');
Route::post('/login', [UserController::class, 'login'])->name('login');