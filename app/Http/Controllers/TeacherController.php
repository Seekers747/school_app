<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function getTeachers() {
        $teachers = Teacher::with('subjects')->orderBy('name')->get();
        return view('teachers', compact('teachers'));
    }
}
