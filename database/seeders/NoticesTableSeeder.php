<?php

namespace Database\Seeders;

use App\Models\Notice;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NoticesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Notice::create([
            'notice_message' => 'Benefactos of loans board are required to sign their fees',
            'due_date' => now()->addDays(7),
        ]);

        Notice::create([
            'notice_message' => 'University will be opening on 11/03/2024 happy holidays everyone and for finalists prepare for your final year project.',
            'due_date' => now()->addDays(14),
        ]);
        Notice::create([
            'notice_message' => 'Happy Preparation for finalist finishin the course in this upcoming year 2024.',
            'due_date' => now()->addDays(21),
        ]);
        Notice::create([
            'notice_message' => 'Field students letters are available, visit your EMS system to acquire them.',
            'due_date' => now()->addDays(27),
        ]);
    }
}
