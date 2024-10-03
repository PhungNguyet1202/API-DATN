<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [PageController::class, 'home'])->name('home');
// Route::get('/page', [PageController::class, 'index']);
// Route::get('/register', [UserController::class, 'register'])->name('register');
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register', [UserController::class,'postregister']);

Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class,'postlogin']);
