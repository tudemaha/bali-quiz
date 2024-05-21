<?php

use App\Http\Controllers\QuizController;
use Illuminate\Support\Facades\Route;

Route::post('/quiz', [QuizController::class, 'answer']);

