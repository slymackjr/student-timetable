<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departments = [
            [
                'department_name' => 'Department of Tax and Economics',
                'faculty_name' => 'Faculty of Business and Economics (FBE)',
            ],
            [
                'department_name' => 'Department of Accounting and Finance',
                'faculty_name' => 'Faculty of Business and Economics (FBE)',
            ],
            [
                'department_name' => 'Department of Management Science',
                'faculty_name' => 'Faculty of Business and Economics (FBE)',
            ],
            [
                'department_name' => 'Department of Information Technology',
                'faculty_name' => 'Faculty of Computing and Mathematics (FCM)',
            ],
            [
                'department_name' => 'Department Of Mathematics And Actuarial Studies',
                'faculty_name' => 'Faculty of Computing and Mathematics (FCM)',
            ],
            [
                'department_name' => 'Department of Computer Science',
                'faculty_name' => 'Faculty of Computing and Mathematics (FCM)',
            ],
            [
                'department_name' => 'Department of Insurance',
                'faculty_name' => 'Faculty of Insurance and Banking (FIB)',
            ],
            [
                'department_name' => 'Department of Social Protection',
                'faculty_name' => 'Faculty of Insurance and Banking (FIB)',
            ],
            [
                'department_name' => 'Department of Banking and Finance Services',
                'faculty_name' => 'Faculty of Insurance and Banking (FIB)',
            ],
        ];

        foreach ($departments as $department) {
            DB::table('departments')->insert($department);
        }
    }
}
