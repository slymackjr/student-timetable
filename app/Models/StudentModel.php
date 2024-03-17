<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StudentModel extends Model
{
    use HasFactory;

    public function __construct(){

    }

    public function LoginStudent($regno, $password): bool
    {
        // Use Eloquent model to retrieve
        $user = Student::find($regno);
        if ($user !== null) {
                 // Attempt to authenticate using the 'staff' guard
                if (Auth::guard('student')->attempt(['registration_number' => $regno, 'password' => $password])) {
                     // Authentication successful, store email in session
                     // Put the email into the session
                     session(['regno' => $regno]);
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

    public function logoutStudent(): bool
{
    // Logout the user from the 'staff' guard
    if(Auth::guard('student')->logout()){
        return true;
    }
    return false;
}

    public function studentAccount(): bool
    {
         // Retrieve the session value
         $regno = session('regno');

         // Check if the session value exists
         if ($regno) {
             // Session value exists, retrieve the student
             $student = Student::where('registration_number', $regno)->first();
 
             // Check if the student exists
             if ($student) {
                 // Set session values
                 session(['regno' => $student->registration_number]);
                 session(['course' => $student->course]);
                 session(['year' => $student->study_year]);
                 session(['group' => $student->study_group]);
                 session(['faculty' => $student->faculty]);
                 session(['department' => $student->department]);
                 session(['gender' => $student->gender]);
                 session(['email' => $student->email]);
                 session(['password' => $student->password]);
                 session(['name' => $student->name]);
                 session::save();
                 return true;
             }
             return false;
         }
         return false;
    }

    public function studentTimetable()
    {
       if($this->studentAccount()){
                // Retrieve classes for the current day
                return Classes::where('day_of_week', date('l'))
                    ->where('course_year', session('year'))
                    ->where('course_group', session('group'))
                    ->where('course_id', session('course'))
                    ->orderBy('start_time')
                    ->orderBy('end_time', 'desc')
                    ->get();
            }
       
    }

    public function WeekTimetable(): Collection
    {
        return Classes::where('course_year', session('year'))
                        ->where('course_group', session('group'))
                        ->where('course_id', session('course'))
                        ->get();
    }


}
