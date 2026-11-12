<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::with(['course', 'profile'])->get();

        return view('students.index', ['students' => $students]);
    }
}