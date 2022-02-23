<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class studentcontroller extends Controller
{
    protected $students;
    public function index()
    {
        $this->student = new Student();
        $this->student->newStudent();
        return 'successs';
//        $this->students = Student::getAllStudenet();
//        return view('all',['students'=> $this->students]);
    }
}
