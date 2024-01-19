<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class VenuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Seed data for venues table
        DB::table('venues')->insert([
            'venue_name' => 'MK3',
            'floor_name' => 'Floor 3',
            'location' => 'Maktaba ya Taifa',
        ]);
        DB::table('venues')->insert([
            'venue_name' => 'MK5',
            'floor_name' => 'Floor 3',
            'location' => 'Maktaba ya Taifa',
        ]);
        DB::table('venues')->insert([
            'venue_name' => 'MK8',
            'floor_name' => 'Floor 3',
            'location' => 'Maktaba ya Taifa',
        ]);
    }
}
