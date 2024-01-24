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
        Schema::create('examinations', function (Blueprint $table) {
            $table->string('exam_id')->primary();
            $table->string('course_id');
            $table->string('exam_date');
            $table->string('day_of_week');
            $table->string('start_time');
            $table->string('end_time');
            $table->string('exam_location');

            $table->foreign('course_id')->references('course_id')->on('courses');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('examinations');
    }
};
