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
        Schema::create('exe_cats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_exercise')->constrained('exercises','id')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('id_cat')->constrained('category__exercises','id')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exe_cats');
    }
};
