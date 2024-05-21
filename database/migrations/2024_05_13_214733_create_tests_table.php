<?php

use App\Models\Answer;
use App\Models\Question;
use App\Models\Test;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->float('score');
            $table->integer('answered');
            $table->timestamps();
        });

        Schema::create('test_details', function(Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Test::class);
            $table->foreignIdFor(Question::class);
            $table->foreignIdFor(Answer::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tests');
        Schema::dropIfExists('test_details');
    }
};
