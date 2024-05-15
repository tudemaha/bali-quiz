<?php

use App\Http\Controllers\QuizController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ["title" => "Home"]);
});

Route::get('/login', function() {
    return view('login', ["title" => "Login"]);
});

Route::get('/register', function() {
    return view('register', ["title" => "Register"]);
});

Route::get('/quiz', [QuizController::class, 'index']);