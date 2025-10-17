<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string('key')->nullable(); // optional key for mapping
            $table->string('locale', 10)->default('en');
            $table->string('text');
            $table->unsignedInteger('position')->default(0);
            $table->timestamps();
            $table->unique(['locale', 'text']);
        });

        Schema::create('question_responses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('question_id')->constrained('questions')->cascadeOnDelete();
            $table->string('email')->nullable();
            $table->text('response');
            $table->ipAddress('ip')->nullable();
            $table->string('user_agent')->nullable();
            $table->timestamps();
            $table->index(['question_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('question_responses');
        Schema::dropIfExists('questions');
    }
};


