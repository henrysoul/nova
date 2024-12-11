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
        Schema::create('assesment_data', function (Blueprint $table) {
            $table->id();
            $table->string('uuid');
            $table->foreignId('assesment_id');
            $table->string("injury_history")->nullable();
            $table->string("10_yard_dash_relative_ratio")->nullable();
            $table->string("vertical_jump_relative_ratio")->nullable();
            $table->string("squat_relative_ratio")->nullable();
            $table->string("60_yard_dash_relative_ratio")->nullable();
            $table->string("bench_relative_ratio")->nullable();
            $table->string("mile_time_relative_ratio")->nullable();
            $table->string("deadlift_relative_ratio")->nullable();
            $table->string("pullup_relative_ratio")->nullable();
            $table->string("reverse_lunge_relative_ratio")->nullable();
            $table->string("pushup_relative_ratio")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assesment_data');
    }
};
