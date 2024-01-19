<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('classes')->insert([
            'module_id' => 'CSU07806',
            'module_name' => 'IS RESEARCH METHOD',
            'course_id' => 'BCS',
            'course_year' => '3',
            'course_group' => '2',
            'lecturer_name' => 'John Doe',
            'day_of_week' => 'Monday',
            'start_time' => '12:00',
            'end_time' => '14:00',
            'room_name' => 'MK5',
        ]);
        DB::table('classes')->insert([
            'module_id' => 'CSU07803',
            'module_name' => 'SOFTWARE ENGINEERING',
            'course_id' => 'BCS',
            'course_year' => '3',
            'course_group' => '2',
            'lecturer_name' => 'Jane Michael',
            'day_of_week' => 'Tuesday',
            'start_time' => '14:00',
            'end_time' => '16:00',
            'room_name' => 'MK3',
        ]);
        DB::table('classes')->insert([
            'module_id' => 'CSU07801',
            'module_name' => 'DISTRIBUTED SYSTEMS',
            'course_id' => 'BCS',
            'course_year' => '3',
            'course_group' => '2',
            'lecturer_name' => 'William Johson',
            'day_of_week' => 'Wednesday',
            'start_time' => '16:00',
            'end_time' => '18:00',
            'room_name' => 'MK8',
        ]);

        // Add more classes records as needed
    }
}
