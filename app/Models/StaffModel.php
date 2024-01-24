<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StaffModel extends Model
{
    use HasFactory;

    public function __construct(){

    }

    public function LoginStaff($email, $password): bool
    {
        // Use Eloquent model to retrieve the officer based on the email
        $user = Staff::where('email', $email)->first();
        if ($user !== null) {
                 // Attempt to authenticate using the 'staff' guard
                if (Auth::guard('staffs')->attempt(['email' => $email, 'password' => $password])) {
                     // Authentication successful, store email in session
                     // Put the email into the session
                    Session::put('email', $email);
                    // Regenerate the session ID
                    Session::regenerate();
                    // Save the changes to the session
                    Session::save();
                    $this->staffAccount();
                    session()->flash('success', 'login successfully!.');
                    return true;
                } else {
                    session()->flash('error', 'login failed!.');
                    return false;
                }
        } else {
            session()->flash('error', 'not registered!.');
            return false;
        }

    }

    public function logoutStaff(): bool
{
    // Logout the user from the 'staff' guard
    if(Auth::guard('staffs')->logout()){
        return true;
    }
    return false;
}

    // Business logic to register staff using Eloquent
    public function registerStaff($name, $staff_id, $job_title, $staff_department, $staff_faculty, $gender, $email,$password): bool
    {
                // Use Eloquent model to check if the email is already taken
                $existingUser = Staff::where('email', $email)->count();

                if ($existingUser > 0) {
                    session()->flash('error', 'Email already taken');
                    return false;
                } else {
                    // Use Eloquent model to insert new staff member
                    $newStaffMember = new Staff();
                    $newStaffMember->setAttribute('email', $email);
                    $newStaffMember->setAttribute('password', Hash::make($password));
                    $newStaffMember->setAttribute('staff_id',$staff_id);
                    $newStaffMember->setAttribute('staff_department',$staff_department);
                    $newStaffMember->setAttribute('staff_faculty',$staff_faculty);
                    $newStaffMember->setAttribute('name',$name);
                    $newStaffMember->setAttribute('gender',$gender);
                    $newStaffMember->setAttribute('job_title',$job_title);


                    if ($newStaffMember->save()) {
                         // Log in the user after successful registration
                          // Use Eloquent model to retrieve the officer based on the email
                        $user = Staff::where('email', $email)->first();
                        if ($user !== null) {
                                // Attempt to authenticate using the 'staff' guard
                                if (Auth::guard('staffs')->attempt(['email' => $email, 'password' => $password])) {
                                    // Authentication successful, store email in session
                                    Session::put('email', $email);
                                    // Regenerate the session ID
                                    Session::regenerate();
                                    // Save the changes to the session
                                    Session::save();
                                    $this->staffAccount();
                                    session()->flash('success', 'Registered successfully.');
                                    return true;
                                } else {
                                    session()->flash('error', 'authentication failed.');
                                    return false;
                                }
                        } else {
                            session()->flash('error', 'registration failed.');
                            return false;
                        }
                        
                    } else {
                        session()->flash('error', 'Failed to Register! Please try again.');
                        return false;
                    }
                }
       
    }

    public function showGroups()
    {
        return Groups::where('course_id',session('course'))
                        ->where('course_year',session('year'))
                        ->orderBy('group_name', 'asc')
                        ->get();
    }

    public function courseGroupTimetable()
    {
        $course = session('course');
        $year = session('year');
        $group = session('group');
        if ($course && $year && $group) {
            // All session values are set
            // Your logic here
            return Classes::where('course_id', $course)
                                ->where('course_year', $year)
                                ->where('course_group', $group)
                                ->get();
    }
}


    public function showGroupTimetable()
    {
        $class_id = session('class_id');
        if ($class_id) {
            // All session values are set
            // Your logic here
            return Classes::where('class_id', $class_id)
                                ->first();
    }
}

    public function deleteGroupTimetable($class_id): bool
    {

    // Find the record to delete
    $class = Classes::find($class_id);

    if (!$class) {
        // Handle the case where the record is not found
        // You can redirect back with an error message or take appropriate action
        session()->flash('success', 'Class session not found.');
        return false;
    }
    // Delete the record
    $deleted = $class->delete();

    if ($deleted) {
        session()->flash('success', 'Class session deleted successfully.');
        return true;
    } else {
        session()->flash('success', 'Failed to delete class session.');
        return false;
    }
    }

    public function showVenues()
    {
        return Venues::all();
    }

    public function showModules()
    {
        return Modules::where('course_id',session('course'))
                        ->where('course_year',session('year'))
                        ->get();
    }

    public function showLecturers()
    {
        $course = Courses::find(session('course'));
        $faculty_name = $course->faculty_name;
        return Lecturers::where('faculty_name',$faculty_name)->get();
    }

    public function checkIfSessionTaken($week_day, $start_time, $end_time): bool
    {
        $course_id = session('course');
        $course_year = session('year');
        $course_group = session('group');
    
        // Get existing classes for the specified course, year, and group
        $existingClasses = Classes::where('course_id', $course_id)
            ->where('course_year', $course_year)
            ->where('course_group', $course_group)
            ->get();
    
        // Check for overlapping time ranges
        $overlappingRecords = $existingClasses->filter(function ($class) use ($week_day, $start_time, $end_time) {
            return $class->day_of_week === $week_day &&
                (($class->start_time > $start_time && $class->start_time < $end_time) ||
                ($class->end_time > $start_time && $class->end_time < $end_time) ||
                ($class->start_time <= $start_time && $class->end_time >= $end_time));
        });
    
        if ($overlappingRecords->isNotEmpty()) {
            session()->flash('success_message', 'Creation failed! There is already a session scheduled for the specified time interval.');
            return true;
        }
        return false;
    }
 

        public function addSession($week_day, $start_time, $end_time, $module, $venue, $lecturer, $session_type): bool
        {
            $course_id = session('course');
            $course_year = session('year');
            $course_group = session('group');
        
            if($this->checkIfSessionTaken($week_day, $start_time, $end_time)){
                return false;
            }
        
            // Insert the new record.
            $modules = Modules::where('module_name', $module)->first();
            $module_id = $modules->module_id;
        
            $classes = new Classes();
            $classes->setAttribute('module_name', $module);
            $classes->setAttribute('session_type', $session_type);
            $classes->setAttribute('day_of_week', $week_day);
            $classes->setAttribute('start_time', $start_time);
            $classes->setAttribute('end_time', $end_time);
            $classes->setAttribute('room_name', $venue);
            $classes->setAttribute('lecturer_name', $lecturer);
            $classes->setAttribute('course_id', $course_id);
            $classes->setAttribute('course_year', $course_year);
            $classes->setAttribute('course_group', $course_group);
            $classes->setAttribute('module_id', $module_id);
        
            $success = $classes->save();
        
            if ($success) {
                return true;
            }
        
            session()->flash('success_message', 'Class session creation failed.');
            return false;
        }
        


    public function staffAccount()
    {
        $staff = Staff::where('email',session('email'))->first();
        Session::put('name', $staff->name);
        Session::put('staff_id', $staff->staff_id);
        Session::put('job_title',  $staff->job_title);
        Session::put('staff_department', $staff->staff_department);
        Session::put('staff_faculty', $staff->staff_faculty);
        Session::put('gender', $staff->gender);
        Session::put('email', $staff->email);
        Session::put('password', $staff->password);
        Session::save();
    }
    

}