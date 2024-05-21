<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use App\Models\Test;
use App\Models\TestDetail;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index(): View {
        $questions = Question::with([
            'answers' => function($query) {
                $query->select(['question_id', 'id', 'answer']);
            }
            ])->get(['id', 'question', 'duration']);
        
        $test = Test::create([
            'user_id' => 1,
        ]);

        return view('quiz', [
            "title" => "Quiz",
            "test_id" => $test->id,
            "questions" => json_encode($questions),
        ]);
    }

    public function answer(Request $request) {
        $data = $request->all();

        TestDetail::create([
            'test_id' => $data['test_id'],
            'question_id' => $data['question_id'],
            'answer_id' => $data['answer_id'],
        ]);
        
        $answer = Answer::find($data['answer_id']);
        $test = Test::find($data['test_id']);

        $is_true = false;
        $test->answered = $test->answered + 1;
        if($answer->is_true) {
            $is_true = true;
            $test->score = $test->score + 1;
        }
        $test->save();

        return response()->json(['status' => true, 'is_true' => $is_true]);
    }
}