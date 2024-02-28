<?php

namespace App\Http\Controllers;

use App\Models\StudentModel;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Http\Response;

class DomPdfController extends Controller
{
    public function getPdf(): Response
    {
        $student = new StudentModel();
        $pdf = PDF::loadView('admin.timetablePDF',['classesData' => $student->WeekTimetable()]);
        return $pdf->download('timetable.pdf');   
    }

    public function getStudentPdf(): Response
    {
        $student = new StudentModel();
        $pdf = PDF::loadView('student.timetablePDF',['classesData' => $student->WeekTimetable()]);
        return $pdf->download('timetable.pdf');
    }
}
