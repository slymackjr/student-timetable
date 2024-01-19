<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UniversityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('university')->insert([
            'course_id' => 'BTX',
            'course_name' => 'Bachelor Of Science in Tax Management',
            'course_years' => '3',
            'department_name' => 'Department of Tax and Economics',
            'faculty_name' => 'Faculty of Business and Economics (FBE)',
        ]);
        DB::table('university')->insert([
            'course_id' => 'BEF',
            'course_name' => 'Bachelor Of Science in Economics and Finance',
            'course_years' => '3',
            'department_name' => 'Department of Tax and Economics',
            'faculty_name' => 'Faculty of Business and Economics (FBE)',
        ]);
        DB::table('university')->insert([
            'course_id' => 'BAIT',
            'course_name' => 'Bachelor Of Accounting with Information Technology',
            'course_years' => '3',
            'department_name' => 'Department of Accounting and Finance',
            'faculty_name' => 'Faculty of Business and Economics (FBE)',
        ]);
        DB::table('university')->insert([
            'course_id' => 'BAC',
            'course_name' => 'Bachelor Of Accounting',
            'course_years' => '3',
            'department_name' => 'Department of Accounting and Finance',
            'faculty_name' => 'Faculty of Business and Economics (FBE)',
        ]);
        DB::table('university')->insert([
            'course_id' => 'BIT',
            'course_name' => 'Bachelor Of Science in Information Technology',
            'course_years' => '3',
            'department_name' => 'Department of Information Technology',
            'faculty_name' => 'Faculty of Computing and Mathematics (FCM)',
        ]);
        DB::table('university')->insert([
            'course_id' => 'BAS',
            'course_name' => 'Bachelor Of Science in Actuarial Science',
            'course_years' => '3',
            'department_name' => 'Department of Actuarial Science and Mathematics',
            'faculty_name' => 'Faculty of Computing and Mathematics (FCM)',
        ]);
        DB::table('university')->insert([
            'course_id' => 'BCS',
            'course_name' => 'Bachelor Of Science in Computer Science',
            'course_years' => '3',
            'department_name' => 'Computer Science',
            'faculty_name' => 'Faculty of Computing and Mathematics (FCM)',
        ]);
        DB::table('university')->insert([
            'course_id' => 'BIRM',
            'course_name' => 'Bachelor Of Science in Insurance and Risk Management',
            'course_years' => '3',
            'department_name' => 'Department of Insurance',
            'faculty_name' => 'Faculty of Insurance and Banking (FIB)',
        ]);
        DB::table('university')->insert([
            'course_id' => 'BSP',
            'course_name' => 'Bachelor Of Science in Social Protection',
            'course_years' => '3',
            'department_name' => 'Department of Social Protection',
            'faculty_name' => 'Faculty of Insurance and Banking (FIB)',
        ]);
        DB::table('university')->insert([
            'course_id' => 'BDCS',
            'course_name' => 'Bachelor Degree in Cyber Security',
            'course_years' => '3',
            'department_name' => 'Department of Information Technology',
            'faculty_name' => 'Faculty of Computing and Mathematics (FCM)',
        ]);
        DB::table('university')->insert([
            'course_id' => 'BBF',
            'course_name' => 'Bachelor of Banking and Finance',
            'course_years' => '3',
            'department_name' => 'Department of Banking and Finance Services',
            'faculty_name' => 'Faculty of Insurance and Banking (FIB)',
        ]);

        // Add more university records as needed
    }
}
