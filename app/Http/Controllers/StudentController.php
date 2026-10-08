<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class StudentController extends Controller
{
    public function index(): View
    {
        $students = [
            ['nis' => '06205', 'name' => 'Adista Raka Pramudya', 'classroom' => 'XI RPL 1', 'status' => 'Active'],
            ['nis' => '06204', 'name' => 'Abellian Yoda', 'classroom' => 'XI RPL 1', 'status' => 'Active'],
            ['nis' => '06206', 'name' => 'Ahmad Kenzie Javas Niscala', 'classroom' => 'XI RPL 1', 'status' => 'Active'],
            ['nis' => '06207', 'name' => 'Alfatih Diar Hanif', 'classroom' => 'XI RPL 1', 'status' => 'Active'],
            ['nis' => '06208', 'name' => 'Kaisar Deno Ankabut', 'classroom' => 'XI RPL 2', 'status' => 'Active'],
            ['nis' => '06209', 'name' => 'Canezares Keandre Arkana Totiro', 'classroom' => 'XI RPL 1', 'status' => 'Inactive'],
            ['nis' => '06210', 'name' => 'Yan Ray', 'classroom' => 'XI RPL 1', 'status' => 'Inactive'],
            ['nis' => '06211', 'name' => 'King Dafi', 'classroom' => 'XI RPL 1', 'status' => 'Active'],
            ['nis' => '06212', 'name' => 'Radhika Veda', 'classroom' => 'XI RPL 1', 'status' => 'Inactive'],
            ['nis' => '06213', 'name' => 'Alfarrold', 'classroom' => 'XI RPL 1', 'status' => 'Inactive'],
        ];

        return view('admin.students', ['students' => $students]);
    }
}
