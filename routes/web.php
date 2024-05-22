<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ["title" => "Home"]);
});
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [UserController::class, 'index'])->middleware('guest');
Route::post('/register', [UserController::class, 'store']);

Route::get('/quiz', [QuizController::class, 'index'])->middleware('auth');
Route::get('/result/{test}', [QuizController::class, 'result'])->middleware('auth');