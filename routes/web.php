<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/register-staff', function () {
    return view('admin.register-admin');
})->name('register-staff');
Route::get('/home-staff', function () {
    return view('admin.index-admin');
})->name('home-staff');
Route::get('/classes-staff', function () {
    return view('admin.class-admin');
})->name('classes-staff');
Route::get('/exams-staff', function () {
    return view('admin.exam-admin');
})->name('exams-staff');
Route::get('/edit-session', function () {
    return view('admin.edit-session');
})->name('edit-session');
Route::get('/add-session', function () {
    return view('admin.add-session');
})->name('add-session');
Route::get('/profile-staff', function () {
    return view('admin.profile-admin');
})->name('profile-staff');
Route::get('/edit-exam', function () {
    return view('admin.edit-exam');
})->name('edit-exam');
Route::get('/add-exam', function () {
    return view('admin.add-exam');
})->name('add-exam');
/* administrator routes end here */

/* student routes start here */
Route::get('/home-student', function () {
    return view('student.index-student');
})->name('home-student');
Route::get('/login-student', function () {
    return view('student.login-student');
})->name('login-student');
Route::get('/register-student', function () {
    return view('student.register-student');
})->name('register-student');
Route::get('/week-classes', function () {
    return view('student.week-classes');
})->name('week-classes');
Route::get('/exam-sessions', function () {
    return view('student.exam-sessions');
})->name('exam-sessions');
Route::get('/profile-student', function () {
    return view('student.profile-student');
})->name('profile-student');
/* student routes end here */