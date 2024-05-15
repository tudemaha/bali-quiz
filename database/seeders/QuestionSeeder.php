<?php

namespace Database\Seeders;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Question::factory()
            ->count(10)
            ->create();

        for($i = 1; $i <= 10; $i++) {
            for($j = 0; $j < 4; $j++) {
                Answer::factory()
                ->create([
                    'is_true' => $j == 3 ? true : false,
                    'question_id' => $i,
                ]);
            }
        }
    }
}
