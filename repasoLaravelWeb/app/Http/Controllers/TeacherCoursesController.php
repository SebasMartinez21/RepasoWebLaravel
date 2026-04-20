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
        $teacher_courses = TeacherCourses::with(['teacher', 'course'])->get();

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

    public function edit($id)
    {
        $teachers = Teacher::all();
        $courses = Course::all();
        $teacher_course = TeacherCourses::find($id);

        return view('teacher_courses.edit', compact('teacher_course', 'teachers', 'courses'));
    }

    public function update(Request $request, $id)
    {
        $teacher_course = TeacherCourses::find($id);
        $teacher_course->id_teacher = $request->id_teacher;
        $teacher_course->id_course = $request->id_course;
        $teacher_course->tutor = $request->tutor;

        $teacher_course->save();

        return redirect()->route('teacher_courses.index');
    }

    public function destroy($id)
    {
        $teacher_course = TeacherCourses::find($id);

        $teacher_course->delete();

        return redirect()->route('teacher_courses.index');
    }
}
