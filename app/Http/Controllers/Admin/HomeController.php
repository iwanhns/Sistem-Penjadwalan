<?php

namespace App\Http\Controllers\Admin;

use App\Employee;
use App\Client;

class HomeController
{
    public function index()
    {
        $lecturers = Employee::orderBy('name', 'ASC')->get()->count();
        $students = Client::orderBy('name', 'ASC')->get()->count();

        return view('home', compact('lecturers', 'students'));
    }
}
