<?php

namespace App\Http\Controllers;

use App\Models\TeacherCourses;
use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Course;

class TeacherCoursesController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();
        $courses = Course::all();
        $teacher_courses = TeacherCourses::all();

        return view('teacher_courses.index', compact('teacher_courses', 'courses', 'teachers'));
    }

    public function store(Request $request)
    {
        $teacher_course = new TeacherCourses();
        $teacher_course->id_teacher = $request->id_teacher;
        $teacher_course->id_course = $request->id_course;
        $teacher_course->tutor = $request->tutor;

        $teacher_course->save();

        return redirect()->route('teacher_courses.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(TeacherCourses $teacherCourses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TeacherCourses $teacherCourses)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TeacherCourses $teacherCourses)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TeacherCourses $teacherCourses)
    {
        //
    }
}
