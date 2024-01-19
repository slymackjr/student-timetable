<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            'name' => 'Jofrey Nyamasheki',
            'registration_number' => 'IMC/BCS/2120294',
            'course' => 'BCS',
            'study_year' => '3',
            'study_group' => '2',
            'faculty' => 'FCM',
            'department' => 'Department of Computer Science',
            'gender' => 'Male',
            'email' => 'jbnyamasheki@gmail.com',
            'password' => Hash::make('IMC/BCS/2120294'),
        ]);
    }
}
