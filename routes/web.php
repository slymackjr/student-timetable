<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

/* administrator routes start here */
Route::get('/login-staff', function () {
    return view('admin.login-admin');
})->name('login-staff');
Route::post('/login-staff', [StaffController::class, 'login'])->name('login-staff-method');
Route::get('/logout', [StaffController::class, 'logout'])->name('logout-staff')->middleware('staff.guard'); 
Route::get('/register-staff', function () {
    return view('admin.register-admin');
})->name('register-staff');
Route::post('/register-staff', [StaffController::class, 'registerStaff'])->name('register-staff-method');
Route::get('/home-staff', function () {
    return view('admin.index-admin');
})->name('home-staff')->middleware('staff.guard');
Route::get('/classes-staff', function () {
    return view('admin.class-admin');
})->name('classes-staff')->middleware('staff.guard');
Route::get('/exams-staff', function () {
    return view('admin.exam-admin');
})->name('exams-staff')->middleware('staff.guard');
Route::get('/edit-session', [StaffController::class, 'showCourseGroupTimetable'])->name('edit-session')->middleware('staff.guard');
Route::post('/edit-session', [StaffController::class, 'updateCourseGroupTimetable'])->name('update-session')->middleware('staff.guard');
Route::get('/add-session', [StaffController::class, 'showCreateClass'])->name('add-session')->middleware('staff.guard');
Route::post('/add-session', [StaffController::class, 'createClass'])->name('create-class')->middleware('staff.guard');
Route::get('/profile-staff', [StaffController::class, 'showProfile'])->name('profile-staff')->middleware('staff.guard');
Route::post('/profile-staffs', [StaffController::class, 'updateProfile'])->name('update-account')->middleware('staff.guard');
Route::post('/staff-profile', [StaffController::class, 'updatePassword'])->name('update-password')->middleware('staff.guard');
Route::get('/edit-exam', function () {
    return view('admin.edit-exam');
})->name('edit-exam')->middleware('staff.guard');
Route::get('/add-exam', function () {
    return view('admin.add-exam');
})->name('add-exam')->middleware('staff.guard');
Route::get('/course-year', [StaffController::class, 'courseYear'])->name('course-year')->middleware('staff.guard');
Route::get('/year-group', [StaffController::class, 'yearGroup'])->name('year-group')->middleware('staff.guard');
Route::get('/group-session', [StaffController::class, 'groupSession'])->name('group-session')->middleware('staff.guard');
Route::post('/group-session', [StaffController::class, 'deleteGroupSession'])->name('delete-session')->middleware('staff.guard');
/* administrator routes end here */

/* student routes start here */
Route::get('/home-student', [StudentController::class, 'showTimetable'])->name('home-student')->middleware('student.guard');
Route::get('/login-student', function () {
    return view('student.login-student');
})->name('login-student');
Route::post('/login-student', [StudentController::class, 'loginStudent'])->name('login-student-method');
Route::get('/logout-student', [StudentController::class, 'logoutStudent'])->name('logout-student')->middleware('student.guard');
Route::get('/register-student', function () {
    return view('student.register-student');
})->name('register-student')->middleware('student.guard');
Route::get('/week-classes', [StudentController::class, 'weekTimetable'])->name('week-classes')->middleware('student.guard');
Route::get('/exam-sessions', function () {
    return view('student.exam-sessions');
})->name('exam-sessions')->middleware('student.guard');
Route::get('/profile-student', [StudentController::class, 'studentProfile'])->name('profile-student')->middleware('student.guard');
Route::post('/profile-student', [StudentController::class, 'changePassword'])->name('change-password')->middleware('student.guard');
/* student routes end here */