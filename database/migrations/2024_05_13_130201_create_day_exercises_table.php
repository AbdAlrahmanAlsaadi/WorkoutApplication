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
        Schema::create('day_exercises', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_exercise')->constrained('exercises')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('id_day')->constrained('dayexes')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('day_exercises');
    }
};
