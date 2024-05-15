<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Contracts\View\View;

class QuizController extends Controller
{
    public function index(): View {
        $questions = Question::with([
            'answers' => function($query) {
                $query->select(['question_id', 'id', 'answer']);
            }
            ])->get(['id', 'question', 'duration']);

        return view('quiz', [
            "title" => "Quiz",
            "questions" => json_encode($questions),
        ]);
    }
}
