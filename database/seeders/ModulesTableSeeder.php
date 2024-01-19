<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ModulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('modules')->insert([
            'module_id' => 'CSU07806',
            'module_name' => 'IS RESEARCH METHOD',
            'course_id' => 'BCS',
        ]);

        DB::table('modules')->insert([
            'module_id' => 'CSU07803',
            'module_name' => 'SOFTWARE ENGINEERING',
            'course_id' => 'BCS',
        ]);

        DB::table('modules')->insert([
            'module_id' => 'CSU07801',
            'module_name' => 'DISTRIBUTED SYSTEMS',
            'course_id' => 'BCS',
        ]);

        // Add more modules if needed
    }
}
