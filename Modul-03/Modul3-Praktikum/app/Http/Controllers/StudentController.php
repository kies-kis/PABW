<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class StudentController extends Controller
{
    public function index()
    {
        $students = [
            [
                'name' => 'Hafid',
                'major' => 'Informatika',
                'age' => 20,
                'courses' => ['Pemrograman Web Lanjut', 'Pemrograman Mobile', 'Pemrograman Berbasis Framework']
            ],
            [
                'name' => 'Rehan',
                'major' => 'Informatika',
                'age' => 23,
                'courses' => ['Pemrograman Web Lanjut, Pemrograman Mobile, Pemrograman Berbasis Framework']
            ],
        ];

        return view('students.index', compact('students'));
    }
}