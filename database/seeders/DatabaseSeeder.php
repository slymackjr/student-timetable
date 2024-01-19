<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(StaffTableSeeder::class);
        $this->call(StudentsTableSeeder::class);
        $this->call(UniversityTableSeeder::class);
        $this->call(VenuesTableSeeder::class);
        $this->call(ModulesTableSeeder::class);
        $this->call(ClassesTableSeeder::class);
        $this->call(ExaminationsTableSeeder::class);
    }
}
