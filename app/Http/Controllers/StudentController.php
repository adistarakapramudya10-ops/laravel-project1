<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Contracts\View\View;

class StudentController extends Controller
{
    public function index(): View
    {
        $students = Student::all();

        return view('admin.students', [
            'title' => 'Students List',
            'students' => $students
        ]);
    }
}
