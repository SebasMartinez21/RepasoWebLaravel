<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherCoursesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

Route::get('/teachers', [TeacherController::class, 'index'])->name('teachers.index');
Route::get('/teachers/{id}', [TeacherController::class, 'edit'])->name('teachers.edit');
Route::put('/teachers/{id}', [TeacherController::class, 'update'])->name('teachers.update');
Route::post('/teachers', [TeacherController::class, 'store'])->name('teachers.store');
Route::delete('/teachers/{id}', [TeacherController::class, 'destroy'])->name('teachers.destroy');


Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
Route::get('/courses/{id}', [CourseController::class, 'edit'])->name('courses.edit');
Route::put('/courses/{id}', [CourseController::class, 'update'])->name('courses.update');
Route::post('/courses', [CourseController::class, 'store'])->name('courses.store');
Route::delete('/courses/{id}', [CourseController::class, 'destroy'])->name('courses.destroy');


Route::get('/teacher_courses', [TeacherCoursesController::class, 'index'])->name('teacher_courses.index');
Route::get('/teacher_courses/{id}', [TeacherCoursesController::class, 'edit'])->name('teacher_courses.edit');
Route::put('/teacher_courses/{id}', [TeacherCoursesController::class, 'update'])->name('teacher_courses.update');
Route::post('/teacher_courses', [TeacherCoursesController::class, 'store'])->name('teacher_courses.store');
Route::delete('/teacher_courses/{id}', [TeacherCoursesController::class, 'destroy'])->name('teacher_courses.destroy');

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{id}', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

Route::get('/categories/{id}/products', [CategoryController::class, 'relacionados'])->name('categories.relacionados');

Route::get('/api_count', function () {
    return view('productApi');
});

Route::get('/api', function () {
    return view('consumoApi');
});

Route::get('/', function () {
    return view('welcome');
});
