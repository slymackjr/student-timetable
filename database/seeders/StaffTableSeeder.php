<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StaffTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('staff')->insert([
            'name' => 'Mike John',
            'staff_id' => '98765',
            'job_title' => 'Administrator',
            'staff_department' => 'Department of Computer Science',
            'staff_faculty' => 'Faculty of Computing and Mathematics (FCM)',
            'gender' => 'Male',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
        ]);

        // Add more seed data as needed
    }
}
