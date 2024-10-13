<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        // جلب الطلاب مع تقسيمهم لصفحات
        $students = Student::paginate(9); // 9 طلاب لكل صفحة

        return view('welcome', compact('students'));
    }
}
