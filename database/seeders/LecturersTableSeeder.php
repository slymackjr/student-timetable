<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LecturersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lecturers = [
            ['name' => 'Dr. Liliani Georgette Nyamizi', 'department_name' => 'Department Of Mathematics And Actuarial Studies', 'faculty_name' => 'Faculty of Computing and Mathematics (FCM)', 'position' => 'Lecturer / Head - Learning and Teaching Unit'],
            ['name' => 'Miss. Luciana Harald Ndunguru', 'department_name' => 'Department of Information Technology', 'faculty_name' => 'Faculty of Computing and Mathematics (FCM)', 'position' => 'Tutorial Assistant'],
            ['name' => 'Mr. Adam . Gwakisa', 'department_name' => 'Department of Computer Science', 'faculty_name' => 'Faculty of Computing and Mathematics (FCM)', 'position' => 'Assistant Lecturer'],
            ['name' => 'Mr. Aigidius Andrea Rugakingila', 'department_name' => 'Department Of Mathematics And Actuarial Studies', 'faculty_name' => 'Faculty of Computing and Mathematics (FCM)', 'position' => 'Assistant Lecturer'],
            ['name' => 'Mr. Augustine Josephat Malamsha', 'department_name' => 'Department of Computer Science', 'faculty_name' => 'Faculty of Computing and Mathematics (FCM)', 'position' => 'Assistant Lecturer'],
            ['name' => 'Mr. Bossi Annacret Masamila', 'department_name' => 'Department of Computer Science', 'faculty_name' => 'Faculty of Computing and Mathematics (FCM)', 'position' => 'Assistant Lecturer'],
            ['name' => 'Mr. Cuthbert Emmanuel Swai', 'department_name' => 'Department of Information Technology', 'faculty_name' => 'Faculty of Computing and Mathematics (FCM)', 'position' => 'Assistant Lecturer'],
            ['name' => 'Mr. Daniel Anselm Tairo', 'department_name' => 'Department of Computer Science', 'faculty_name' => 'Faculty of Computing and Mathematics (FCM)', 'position' => 'Assistant Lecturer'],
            ['name' => 'Mr. David Tottinant Makota', 'department_name' => 'Department of Computer Science', 'faculty_name' => 'Faculty of Computing and Mathematics (FCM)', 'position' => 'Assistant Lecturer'],
            ['name' => 'Dr. Hussein Bakiri Abubakari', 'department_name' => 'Department of Computer Science', 'faculty_name' => 'Faculty of Computing and Mathematics (FCM)', 'position' => 'Lecturer'],
            ['name' => 'Mr. Joshua Lesili Ngowi', 'department_name' => 'Department of Computer Science', 'faculty_name' => 'Faculty of Computing and Mathematics (FCM)', 'position' => 'Tutorial Assistant'],
            ['name' => 'Mr. Kaizilege Webb Mwemezi', 'department_name' => 'Department of Computer Science', 'faculty_name' => 'Faculty of Computing and Mathematics (FCM)', 'position' => 'Assistant Lecturer'],
            ['name' => 'Mr. Matimbila Martin Lyuba', 'department_name' => 'Department of Computer Science', 'faculty_name' => 'Faculty of Computing and Mathematics (FCM)', 'position' => 'Assistant Lecturer'],
            ['name' => 'Dr. Michael Laurent Bukwimba', 'department_name' => 'Department Of Mathematics And Actuarial Studies', 'faculty_name' => 'Faculty of Computing and Mathematics (FCM)', 'position' => 'Lecturer'],
            ['name' => 'Mr. Mugaga Leonard Mugyabuso', 'department_name' => 'Department of Information Technology', 'faculty_name' => 'Faculty of Computing and Mathematics (FCM)', 'position' => 'Assistant Lecturer'],
            ['name' => 'Dr. Saleh Muhamed Mwachaka', 'department_name' => 'Department of Computer Science', 'faculty_name' => 'Faculty of Computing and Mathematics (FCM)', 'position' => 'Lecturer / Head - Department of Information Technology'],
            ['name' => 'Mr. Stamili Twahiru Makurunge', 'department_name' => 'Department Of Mathematics And Actuarial Studies', 'faculty_name' => 'Faculty of Computing and Mathematics (FCM)', 'position' => 'Assistant Lecturer'],
            ['name' => 'Mr. Thadeo James Kyombo', 'department_name' => 'Department of Information Technology', 'faculty_name' => 'Faculty of Computing and Mathematics (FCM)', 'position' => 'Tutorial Assistant'],
            ['name' => 'Mr. Thomas Nagunwa Nagunwa', 'department_name' => 'Department of Computer Science', 'faculty_name' => 'Faculty of Computing and Mathematics (FCM)', 'position' => 'Assistant Lecturer'],
            ['name' => 'Mr. Abdallah Selemani Siphy', 'department_name' => 'Department of Computer Science', 'faculty_name' => 'Faculty of Computing and Mathematics (FCM)', 'position' => 'Assistant Lecturer'],
            // Add more lecturers as needed
        ];

        foreach ($lecturers as $lecturer) {
            DB::table('lecturers')->insert($lecturer);
        }

        $additionalLecturers = [
            ['name' => 'Miss. Annastazia Jumanne Hema', 'department_name' => 'Department Of Mathematics And Actuarial Studies', 'faculty_name' => 'Faculty of Computing and Mathematics (FCM)', 'position' => 'Assistant Lecturer'],
            ['name' => 'Miss. Caroline Paschal Lengwa', 'department_name' => 'Department Of Mathematics And Actuarial Studies', 'faculty_name' => 'Faculty of Computing and Mathematics (FCM)', 'position' => 'Assistant Lecturer'],
            ['name' => 'Dr. Daniel Ntabagi Koloseni', 'department_name' => 'Department of Information Technology', 'faculty_name' => 'Faculty of Computing and Mathematics (FCM)', 'position' => 'Senior Lecturer / Dean - Faculty of Computing and Mathematics'],
            ['name' => 'Mr. Daudi Mika Mungure', 'department_name' => 'Department Of Mathematics And Actuarial Studies', 'faculty_name' => 'Faculty of Computing and Mathematics (FCM)', 'position' => 'Assistant Lecturer'],
            ['name' => 'Dr. Dennis Michael Lupiana', 'department_name' => 'Department of Computer Science', 'faculty_name' => 'Faculty of Computing and Mathematics (FCM)', 'position' => 'Lecturer'],
            ['name' => 'Dr. Deogratius Mathew Lashayo', 'department_name' => 'Department of Computer Science', 'faculty_name' => 'Faculty of Computing and Mathematics (FCM)', 'position' => 'Lecturer / Head - Department of Mathematics and Actuarial Studies'],
            ['name' => 'Dr. Doreen Laurent Rutagumirwa', 'department_name' => 'Department Of Mathematics And Actuarial Studies', 'faculty_name' => 'Faculty of Computing and Mathematics (FCM)', 'position' => 'Lecturer'],
            ['name' => 'Dr. Dossa Mohamed Massa', 'department_name' => 'Department of Computer Science', 'faculty_name' => 'Faculty of Computing and Mathematics (FCM)', 'position' => 'Lecturer'],
            ['name' => 'Mr. Edigar Myula Msangawale', 'department_name' => 'Department of Information Technology', 'faculty_name' => 'Faculty of Computing and Mathematics (FCM)', 'position' => 'Assistant Lecturer'],
            ['name' => 'Dr. Edwin Marco Kwesigabo', 'department_name' => 'Department of Information Technology', 'faculty_name' => 'Faculty of Computing and Mathematics (FCM)', 'position' => 'Lecturer'],
            ['name' => 'Mr. Elibariki Rabiel Mwasha', 'department_name' => 'Department Of Mathematics And Actuarial Studies', 'faculty_name' => 'Faculty of Computing and Mathematics (FCM)', 'position' => 'Assistant Lecturer'],
            ['name' => 'Dr. Faraja Teddy Igira', 'department_name' => 'Department of Information Technology', 'faculty_name' => 'Faculty of Computing and Mathematics (FCM)', 'position' => 'Senior Lecturer / Director - Research and Consultancy and Publications'],
            ['name' => 'Miss. Fatuma Mzee Shefa', 'department_name' => 'Department of Information Technology', 'faculty_name' => 'Faculty of Computing and Mathematics (FCM)', 'position' => 'Assistant Lecturer'],
            ['name' => 'Mr. Guntram Martin Wagofya', 'department_name' => 'Department Of Mathematics And Actuarial Studies', 'faculty_name' => 'Faculty of Computing and Mathematics (FCM)', 'position' => 'Assistant Lecturer'],
            ['name' => 'Mr. Heri Onaufoo Nderingo', 'department_name' => 'Department of Information Technology', 'faculty_name' => 'Faculty of Computing and Mathematics (FCM)', 'position' => 'Assistant Lecturer'],
            ['name' => 'Dr. Herman Eliewaha Mandari', 'department_name' => 'Department of Computer Science', 'faculty_name' => 'Faculty of Computing and Mathematics (FCM)', 'position' => 'Senior Lecturer / Director - Information and Communication Technology'],
            ['name' => 'Mr. Is-hak Hassan Suleiman', 'department_name' => 'Department Of Mathematics And Actuarial Studies', 'faculty_name' => 'Faculty of Computing and Mathematics (FCM)', 'position' => 'Tutorial Assistant'],
            ['name' => 'Mr. Isaac Samwel Mutama', 'department_name' => 'Department of Information Technology', 'faculty_name' => 'Faculty of Computing and Mathematics (FCM)', 'position' => 'Assistant Lecturer'],
            ['name' => 'Dr. Julius Athuman Raphael', 'department_name' => 'Department of Computer Science', 'faculty_name' => 'Faculty of Computing and Mathematics (FCM)', 'position' => 'Lecturer'],
            ['name' => 'Mr. Leonard Gervas Assenga', 'department_name' => 'Department Of Mathematics And Actuarial Studies', 'faculty_name' => 'Faculty of Computing and Mathematics (FCM)', 'position' => 'Tutorial Assistant'],
            // Add more lecturers as needed
        ];

        foreach ($additionalLecturers as $lecturer) {
            DB::table('lecturers')->insert($lecturer);
        }

        $additionalLecturers2 = [
            ['name' => 'Miss. Lucilla Joseph Chuwa', 'department_name' => 'Department of Information Technology', 'faculty_name' => 'Faculty of Computing and Mathematics (FCM)', 'position' => 'Assistant Lecturer'],
            ['name' => 'Dr. Mastidia Elizeus Byanyuma', 'department_name' => 'Department of Computer Science', 'faculty_name' => 'Faculty of Computing and Mathematics (FCM)', 'position' => 'Lecturer'],
            ['name' => 'Dr. Msury Rogasian Mahunnah', 'department_name' => 'Department of Computer Science', 'faculty_name' => 'Faculty of Computing and Mathematics (FCM)', 'position' => 'Lecturer / Head - Department of Computer Science'],
            ['name' => 'Mrs. Neema Wilberth Mahuma', 'department_name' => 'Department Of Mathematics And Actuarial Studies', 'faculty_name' => 'Faculty of Computing and Mathematics (FCM)', 'position' => 'Assistant Lecturer'],
            ['name' => 'Dr. Pendo Teresia Kivyiro', 'department_name' => 'Department Of Mathematics And Actuarial Studies', 'faculty_name' => 'Faculty of Computing and Mathematics (FCM)', 'position' => 'Lecturer'],
            ['name' => 'Mr. Rajab Saidi Kufikiri', 'department_name' => 'Department of Information Technology', 'faculty_name' => 'Faculty of Computing and Mathematics (FCM)', 'position' => 'Assistant Lecturer'],
            ['name' => 'Dr. Renatus Michael Mushi', 'department_name' => 'Department of Computer Science', 'faculty_name' => 'Faculty of Computing and Mathematics (FCM)', 'position' => 'Senior Lecturer / Deputy-Head Quality Assurance Unit'],
            ['name' => 'Mr. Riziki Ally Ally', 'department_name' => 'Department of Information Technology', 'faculty_name' => 'Faculty of Computing and Mathematics (FCM)', 'position' => 'Tutorial Assistant'],
            ['name' => 'Mr. Robert John Ngeleshi', 'department_name' => 'Department of Computer Science', 'faculty_name' => 'Faculty of Computing and Mathematics (FCM)', 'position' => 'Assistant Lecturer'],
            ['name' => 'Dr. Rose Israel Tinabo', 'department_name' => 'Department of Information Technology', 'faculty_name' => 'Faculty of Computing and Mathematics (FCM)', 'position' => 'Lecturer'],
            ['name' => 'Dr. Said Jafari', 'department_name' => 'Department of Computer Science', 'faculty_name' => 'Faculty of Computing and Mathematics (FCM)', 'position' => 'Lecturer / Director - Academic Student Services'],
            ['name' => 'Mr. Salvius Raphael Mgaya', 'department_name' => 'Department Of Mathematics And Actuarial Studies', 'faculty_name' => 'Faculty of Computing and Mathematics (FCM)', 'position' => 'Assistant Lecturer'],
            ['name' => 'Mr. Wangilisasi,L', 'department_name' => 'Department of Computer Science', 'faculty_name' => 'Faculty of Computing and Mathematics (FCM)', 'position' => 'Assistant Lecturer'],
            ['name' => 'Mr. Manase,S', 'department_name' => 'Department Of Mathematics And Actuarial Studies', 'faculty_name' => 'Faculty of Computing and Mathematics (FCM)', 'position' => 'Tutorial Assistant'],
            // Add more lecturers as needed
        ];

        foreach ($additionalLecturers2 as $lecturer) {
            DB::table('lecturers')->insert($lecturer);
        }
    }
}
