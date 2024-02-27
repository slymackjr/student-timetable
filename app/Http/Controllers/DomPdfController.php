<?php

namespace App\Http\Controllers;

use App\Models\StudentModel;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf as PDF;

class DomPdfController extends Controller
{
    public function getPdf()
    {
        $student = new StudentModel();
        $pdf = PDF::loadView('admin.timetablePDF',['classesData' => $student->WeekTimetable()]);
        return $pdf->download('timetable.pdf');   
    }

    public function getStudentPdf()
    {
        $student = new StudentModel();
        $pdf = PDF::loadView('student.timetablePDF',['classesData' => $student->WeekTimetable()]);
        return $pdf->download('timetable.pdf');
    }
}
