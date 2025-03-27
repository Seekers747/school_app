<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SubjectController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teachers', [TeacherController::class, 'getTeachers']);
Route::get('/subjects', [SubjectController::class, 'getSubjects']);

