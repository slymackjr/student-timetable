<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\View\View;
use App\Models\NoticeModel;
use App\Models\StudentModel;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    public function loginStudent(Request $request): RedirectResponse
    {
        $regno = $request->input('regno');
        $password = $request->input('password');

        $student = new StudentModel();
        $success = $student->LoginStudent($regno, $password);

         // Handle redirection based on success or failure
         if ($success) {
            // Login successful
            session()->flash('success', 'Welcome back.');
            $student->studentAccount();
            return redirect()->route('home-student');
        } else {
            // Login failed
            return redirect()->route('login-student')->with('error', 'Incorrect Credentials!');
        }
    }

    public function logoutStudent(): RedirectResponse
{
    $student = new StudentModel();
    if (!$student->logoutStudent()) {
        return redirect()->route('home-student');
    }
}

    public function showTimetable(): View
    {
        $notice = new NoticeModel();
        $student = new StudentModel();
        return view('student.index-student',[
            'today' => $student->studentTimetable(),
            'date' => date('Y-m-d l'),
            'notices' => $notice->showNotices(),
        ]);
    }

    public function weekTimetable(): View
    {
        $student = new StudentModel();
        return view('student.week-classes',[
            'classesData' => $student->WeekTimetable()
        ]);
    }

    public function studentProfile(): View
    {
        $student = new StudentModel();
        $student->studentAccount();
        return view('student.profile-student');
    }

    public function changePassword(Request $request): View
    {
        $password = $request->input('password');
        $newPassword = $request->input('newpassword');
        if(password_verify($password,session('password')))
        {
            $student = Student::find(session('regno'));
            $student->password = Hash::make($newPassword);
            $success = $student->save();
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
