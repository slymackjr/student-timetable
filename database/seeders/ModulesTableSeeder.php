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
        $modules1 = [
            ['module_id' => 'CSU08110', 'module_name' => 'Customer Relationship Management', 'course_id' => 'BCS','course_year' => '3'],
            ['module_id' => 'CSU08105', 'module_name' => 'Advanced Database Technologies', 'course_id' => 'BCS','course_year' => '3'],
            ['module_id' => 'CSU08104', 'module_name' => 'Advanced Software Engineering', 'course_id' => 'BCS','course_year' => '3'],
            ['module_id' => 'CSU08107', 'module_name' => 'IS Strategy & Policy Formulation', 'course_id' => 'BCS','course_year' => '3'],
            ['module_id' => 'CSU08109', 'module_name' => 'e-Government', 'course_id' => 'BCS','course_year' => '3'],
            ['module_id' => 'CSU08111', 'module_name' => 'Operational Research', 'course_id' => 'BCS','course_year' => '3'],
            ['module_id' => 'CSU08103', 'module_name' => 'Distributed Systems', 'course_id' => 'BCS','course_year' => '3'],
            ['module_id' => 'CSU08106', 'module_name' => 'Field Industrial Training', 'course_id' => 'BCS','course_year' => '3'],
            ['module_id' => 'CSU08101', 'module_name' => 'Network Architecture', 'course_id' => 'BCS','course_year' => '3'],
            ['module_id' => 'CSU08102', 'module_name' => 'Wireless Technologies', 'course_id' => 'BCS','course_year' => '3'],
            ['module_id' => 'CSU08108', 'module_name' => 'IS Research Methods', 'course_id' => 'BCS','course_year' => '3'],
            // Add more modules as needed
        ];

        foreach ($modules1 as $module) {
            DB::table('modules')->insert($module);
        }

        $modules2 = [
            ['module_id' => 'ITU08104', 'module_name' => 'Supply Chain Management Systems', 'course_id' => 'BIT','course_year' => '3'],
            ['module_id' => 'ITU08107', 'module_name' => 'IS Strategy & Policy Formulation', 'course_id' => 'BIT','course_year' => '3'],
            ['module_id' => 'ITU08108', 'module_name' => 'IS Research Methods', 'course_id' => 'BIT','course_year' => '3'],
            ['module_id' => 'ITU08109', 'module_name' => 'E-Government', 'course_id' => 'BIT','course_year' => '3'],
            ['module_id' => 'ITU08101', 'module_name' => 'Network Architecture', 'course_id' => 'BIT','course_year' => '3'],
            ['module_id' => 'ITU08103', 'module_name' => 'Wireless Technologies', 'course_id' => 'BIT','course_year' => '3'],
            ['module_id' => 'ITU8105', 'module_name' => 'Computer Systems Management', 'course_id' => 'BIT','course_year' => '3'],
            ['module_id' => 'ITU08110', 'module_name' => 'Customer Relationship Management', 'course_id' => 'BIT','course_year' => '3'],
            ['module_id' => 'ITU08102', 'module_name' => 'Web Database Applications', 'course_id' => 'BIT','course_year' => '3'],
            ['module_id' => 'ITU08106', 'module_name' => 'Field Industrial Training', 'course_id' => 'BIT','course_year' => '3'],
            // Add more modules as needed
        ];

        foreach ($modules2 as $module) {
            DB::table('modules')->insert($module);
        }

        // Add more modules if needed
    }
}
