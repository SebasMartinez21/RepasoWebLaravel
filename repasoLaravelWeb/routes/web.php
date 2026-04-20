<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherCoursesController;

Route::get('/teachers', [TeacherController::class, 'index'])->name('teachers.index');
Route::post('/teachers', [TeacherController::class, 'store'])->name('teachers.store');


Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
Route::post('/courses', [CourseController::class, 'store'])->name('courses.store');

Route::get('/teacher_courses', [TeacherCoursesController::class, 'index'])->name('teacher_courses.index');
Route::post('/teacher_courses', [TeacherCoursesController::class, 'store'])->name('teacher_courses.store');

Route::get('/', function () {
    return view('welcome');
});
