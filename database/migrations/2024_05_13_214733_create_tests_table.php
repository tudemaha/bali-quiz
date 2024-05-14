<?php

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
            $table->timestamp('time');
            $table->float('score');
            $table->foreignId('user_id');
            $table->timestamps();
        });

        Schema::create('test_details', function(Blueprint $table) {
            $table->id();
            $table->foreignId('test_id');
            $table->foreignId('question_id');
            $table->foreignId('answer_id');
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
