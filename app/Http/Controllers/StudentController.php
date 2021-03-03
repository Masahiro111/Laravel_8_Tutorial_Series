<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function addStudent()
    {
        $student = new Student();
        $student->name = "Peter";
        $student->email = "peter@example.com";
        $student->phone = "12345678";
        $student->save();

        return "Record Inserted";
    }

    public function getStudents()
    {
        return Student::all();
    }
}
