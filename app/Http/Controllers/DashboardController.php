<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $title = 'Dashboard';
        $content = 'Welcome to the dashboard!';
        return view('admin.dashboard', [
            'title' => $title,
            'content' => $content
        ]);
    }
}
