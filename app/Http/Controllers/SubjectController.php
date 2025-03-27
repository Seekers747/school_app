<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function getSubjects() {
        $subjects = Subject::with('teacher')->orderBy('name')->get();
        return view('subjects', compact('subjects'));
    }
}
