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
        $this->call(FacultiesTableSeeder::class);
        $this->call(DepartmentsTableSeeder::class);
        $this->call(VenuesTableSeeder::class);
        $this->call(CoursesTableSeeder::class);
        $this->call(StaffTableSeeder::class);
        $this->call(GroupsTableSeeder::class);
        $this->call(ModulesTableSeeder::class);
        $this->call(LecturersTableSeeder::class);
        $this->call(StudentsTableSeeder::class);
        $this->call(ClassesTableSeeder::class);
        $this->call(NoticesTableSeeder::class);

    }
}
