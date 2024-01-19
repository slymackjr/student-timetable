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
        Schema::create('university', function (Blueprint $table) {
            $table->string('course_id')->primary();
            $table->string('course_name');
            $table->string('course_years');
            $table->string('department_name');
            $table->string('faculty_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('university');
    }
};
