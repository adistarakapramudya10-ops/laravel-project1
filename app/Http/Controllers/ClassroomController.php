<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classroom;

class ClassroomController extends Controller
{
    public function index()
    {
        $classroom = Classroom::all();

        return view('admin.classroom', [
            'title' => 'Classroom List',
            'classroom' => $classroom
        ]);
    }
}
