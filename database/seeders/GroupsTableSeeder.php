<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = DB::table('courses')->distinct()->pluck('course_id');

        foreach ($courses as $course) {
            for ($year = 1; $year <= 3; $year++) {
                $groupNames = $this->getGroupNames($course, $year);

                foreach ($groupNames as $group => $groupName) {
                    DB::table('groups')->insert([
                        'course_id' => $course,
                        'course_year' => $year,
                        'group_name' => $groupName,
                    ]);
                }
            }
        }
    }

    private function getGroupNames($course, $year)
    {
        // Add conditions for specific courses and years
        if ($course == 'BCS' && $year == 3) {
            return ['Software Engineering', 'Computer Network'];
        } elseif ($course == 'BIT' && $year == 3) {
            return ['System Developer', 'System Administrator'];
        } else {
            // Default group names for other cases
            return ["1", "2", "3"];
        }
    }
}
