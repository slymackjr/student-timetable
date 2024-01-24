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
        Schema::create('staff', function (Blueprint $table) {
            $table->string('name');
            $table->string('staff_id')->unique();
            $table->string('job_title');
            $table->string('staff_department');
            $table->string('staff_faculty');
            $table->string('gender');
            $table->string('email')->primary();
            $table->string('password');

            // Foreign key constraint
            $table->foreign('staff_department')->references('department_name')->on('departments');
            // Foreign key constraint
            $table->foreign('staff_faculty')->references('faculty_name')->on('faculties');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff');
    }
};
