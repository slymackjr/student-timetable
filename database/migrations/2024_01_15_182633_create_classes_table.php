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
        Schema::create('classes', function (Blueprint $table) {
            $table->id('class_id');
            $table->string('module_id');
            $table->string('module_name');
            $table->string('course_id');
            $table->foreign('course_id')->references('course_id')->on('university');
            $table->string('course_year');
            $table->string('course_group');
            $table->string('lecturer_name');
            $table->string('day_of_week');
            $table->string('start_time');
            $table->string('end_time');
            $table->string('room_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classes');
    }
};
