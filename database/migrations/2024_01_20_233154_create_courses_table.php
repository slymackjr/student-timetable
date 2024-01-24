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
        Schema::create('courses', function (Blueprint $table) {
            $table->string('course_id')->primary();
            $table->string('course_name')->unique();
            $table->string('course_years');
            $table->string('department_name');
            $table->string('faculty_name');

            // Foreign key constraint
            $table->foreign('department_name')->references('department_name')->on('departments');
            // Foreign key constraint
            $table->foreign('faculty_name')->references('faculty_name')->on('faculties');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
