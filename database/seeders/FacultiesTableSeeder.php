<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FacultiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faculties = [
            ['faculty_name' => 'Faculty of Business and Economics (FBE)'],
            ['faculty_name' => 'Faculty of Computing and Mathematics (FCM)'],
            ['faculty_name' => 'Faculty of Insurance and Banking (FIB)'],
            // Add more faculties as needed
        ];

        foreach ($faculties as $faculty) {
            DB::table('faculties')->insert($faculty);
        }
    }
}
