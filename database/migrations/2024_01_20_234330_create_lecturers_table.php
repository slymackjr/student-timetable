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
        Schema::create('lecturers', function (Blueprint $table) {
            $table->id('id');
            $table->string('name')->unique();
            $table->string('department_name');
            $table->string('faculty_name');
            $table->string('position');

            // Foreign key constraint
            $table->foreign('department_name')->references('department_name')->on('departments');
            $table->foreign('faculty_name')->references('faculty_name')->on('faculties');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lecturers');
    }
};
