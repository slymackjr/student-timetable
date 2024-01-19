<?php

namespace App\Http\Controllers;

use DateTime;
use Carbon\Carbon;
use App\Models\Staff;
use App\Models\Classes;
use Illuminate\View\View;
use App\Models\StaffModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class StaffController extends Controller
{

    public function registerStaff(Request $request)
    {
     
        $formFields = $request->validate(Staff::$rules);
        $email = $request->input('email');
        $password = $request->input('password');
        $staff_id = $request->input('staff_id');
        $staff_department = $request->input('staff_department');
        $staff_faculty = $request->input('staff_faculty');
        $name = $request->input('name');
        $gender = $request->input('gender');
        $job_title = $request->input('job_title');
        $confirmPassword = $request->input('password_confirmation');

        $staff = new StaffModel();
        $message = $staff->registerStaff($name, $staff_id, $job_title, $staff_department, $staff_faculty, $gender, $email,$password);

        // Handle redirection based on success or failure
        if ($message) {
            // Registration successful
            return redirect()->route('home-staff');
        } else {
            // Registration failed
            return redirect()->route('register-staff');
        }
    }

    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $staff = new StaffModel();
        $success = $staff->LoginStaff($email, $password);

         // Handle redirection based on success or failure
         if ($success) {
            // Login successful
            session()->flash('success', 'Welcome back.');
            return redirect()->route('home-staff');
        } else {
            // Login failed
            return redirect()->route('login-staff')->with('error', 'Incorrect email or password');
        }
    }

    public function logout()
{
    $staff = new StaffModel();
    if (!$staff->logoutStaff()) {
        return redirect()->route('home-staff');
    }
}

    public function courseYear(): View
{
    session(['course' => request('course')]);

    return view('admin.course-year');
}


    public function yearGroup(): View
    {
        session(['year' => request('year')]);
        return view('admin.year-group');
    }

    public function groupSession(): View
    {
        session(['group' => request('group')]);
        $staff = new StaffModel();
        $timetable = $staff->courseGroupTimetable();
        return view('admin.group-session',['timetable'=> $timetable]);
    }

    public function deleteGroupSession(Request $request): View
    {
        $classId = $request->input('class_id');
        $staff = new StaffModel();
        $staff->deleteGroupTimetable($classId);
        $timetable = $staff->courseGroupTimetable();
        return view('admin.group-session',['timetable'=> $timetable]);
    }

    public function showCourseGroupTimetable(): View
    {
        session(['class_id' => request('class_id')]);
        $staff = new StaffModel();
        $groupTimetable = $staff->showGroupTimetable();
        $start_time = $groupTimetable->start_time;
        $end_time = $groupTimetable->end_time;
        $venues = $staff->showVenues();
        $modules  = $staff->showModules();

        return view('admin.edit-session',[
            'class_id'=> $groupTimetable->class_id,
            'module_id'=> $groupTimetable->module_id,
            'module_name'=> $groupTimetable->module_name,
            'course_id'=> $groupTimetable->course_id,
            'course_year'=> $groupTimetable->course_year,
            'course_group'=> $groupTimetable->course_group,
            'lecturer_name'=> $groupTimetable->lecturer_name,
            'day_of_week'=> $groupTimetable->day_of_week,
            'start_time'=> $start_time,
            'end_time'=> $end_time,
            'room_name'=> $groupTimetable->room_name,
            'venues' => $venues,
            'modules' => $modules
        ]);
    }

    public function updateCourseGroupTimetable(Request $request): View
    {
         // Assuming you have a unique identifier like 'class_id'
        $classId = $request->input('class_id');
        // Find the record to update
        $class = Classes::find($classId);
        if(!$class) {
            // Handle the case where the record is not found
            // You can redirect back with an error message or take appropriate action
            session()->flash('success', 'Class session not found!.');
            return $this->showCourseGroupTimetable();
        }

         // Define the variables you want to update
        $updateVariables = [
            'day_of_week' => $request->input('week_day'),
            'start_time' => $request->input('start_time'),
            'end_time' => $request->input('end_time'),
            'module_name' => $request->input('module'),
            'room_name' => $request->input('venue'),
            'lecturer_name' => $request->input('lecturer'),
        ];

        // Loop through the update variables and update if there is a value
        foreach ($updateVariables as $key => $value) {
            if (!is_null($value)) {
                $class->$key = $value;
            }
        }

        // Save the changes
        $success = $class->save();

        if($success){
            session()->flash('success', 'Class session updated!.');
            return $this->showCourseGroupTimetable();
        }
        session()->flash('success', 'Class session update failed!.');
        return $this->showCourseGroupTimetable();
    }

    public function showCreateClass(): View
    {
        $staff = new StaffModel();
        $venues = $staff->showVenues();
        $modules  = $staff->showModules();
        return view('admin.add-session',[
            'venues' => $venues,
            'modules' => $modules
        ]);
    }

    public function createClass(Request $request): View
    {
    
        $formFields = $request->validate(Classes::$rules);
        $week_day = $request->input('week_day');
        $start_time = $request->input('start_time');
        $end_time = $request->input('end_time');
        $module = $request->input('module');
        $venue = $request->input('venue');
        $lecturer = $request->input('lecturer');

        $staff = new StaffModel();
        $success = $staff->addSession($week_day,$start_time,$end_time,$module,$venue,$lecturer);
        if($success){
            session()->flash('success', 'Class session created!.');
            return $this->showCreateClass();
        }
        session()->flash('success', 'Class session creation failed!.');
        return $this->showCreateClass();
    }

    public function showProfile(): View
    {
        $staff = new StaffModel();
        $staff->staffAccount();

        return view('admin.profile-admin');
    }

    public function updateProfile(Request $request): View
    {
        $staff = Staff::find(session('email'));
          // Define the variables you want to update
         $updateVariables = [
             'name' => $request->input('name'),
             'staff_id' => $request->input('staff_id'),
             'job_title' => $request->input('job_title'),
             'staff_department' => $request->input('staff_department'),
             'staff_faculty' => $request->input('staff_faculty'),
             'email' => $request->input('email'),
         ];
 
         // Loop through the update variables and update if there is a value
         foreach ($updateVariables as $key => $value) {
             if (!is_null($value)) {
                 $staff->$key = $value;
             }
         }
 
         // Save the changes
         $success = $staff->save();
 
         if($success){
             session()->flash('success', 'Profile updated!.');
             return $this->showProfile();
         }
         session()->flash('success', 'Profile update failed!.');
         return $this->showProfile();
    }

    public function updatePassword(Request $request): View
    {
        $password = $request->input('password');
        $newPassword = $request->input('newpassword');
        if(password_verify($password,session('password')))
        {
            $staff = Staff::find(session('email'));
            $staff->password = Hash::make($newPassword);
            $success = $staff->save();
            if($success)
            {
                session()->flash('success', 'Password updated!.'); 
                return $this->showProfile();
            }
            session()->flash('success', 'Password update failed!.');
            return $this->showProfile();
        }
        session()->flash('success', 'wrong current password!.');
        return $this->showProfile();
    }

}