<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class AboutController extends Controller
{
    public function index(): View
    {
        return view('admin.about', [
            'title' => 'About Me!',
            'name' => 'Adista Raka Pramudya',
            'hobby' => 'Playing Game',
            'github' => 'adistarakapramudya10-oop',
        ]);
    }
}
