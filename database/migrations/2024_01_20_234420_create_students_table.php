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
        Schema::create('students', function (Blueprint $table) {
            $table->string('name')->unique();
            $table->string('registration_number')->primary();
            $table->string('course');
            $table->string('study_year');
            $table->string('study_group');
            $table->string('faculty');
            $table->string('department');
            $table->string('gender');
            $table->string('email')->unique();
            $table->string('password');

             // Foreign key constraint
             $table->foreign('department')->references('department_name')->on('departments');
             $table->foreign('faculty')->references('faculty_name')->on('faculties');
             $table->foreign('course')->references('course_id')->on('courses');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
