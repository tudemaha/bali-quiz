<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Test;
use Illuminate\Contracts\View\View;

class DashboardController
{
    public function index(): View {

        if(auth()->user()->master_role_id != 1) {
            abort(403);
        }

        $tests = Test::with([
            'user' => function($query) {
                $query->select(['id', 'name']);
            }
        ])
            ->orderBy('created_at', 'desc')
            ->paginate(15);
        
        $total = Question::all()->count();

        return view('dashboard', [
            'title' => 'Dashboard',
            'total' => $total,
            'tests' => $tests,
        ]);
    }
}
