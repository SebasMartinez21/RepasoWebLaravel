<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
   
    public function index()
    {
        $courses = Course::all();

        return view('courses.index', compact('courses'));
    }

    public function store(Request $request)
    {
        $course = new Course();
        $course->name = $request->name;
        $course->descr = $request->descr;
        $course->credits = $request->credits;

        $course->save();

        return redirect()->route('courses.index');
    }

    public function edit($id)
    {
        $course = Course::find($id);

        return view('courses.edit', compact('course'));
    }

    public function update(Request $request, $id)
    {
        $course = Course::find($id);
        $course->name = $request->name;
        $course->descr = $request->descr;
        $course->credits = $request->credits;

        $course->save();

        return redirect()->route('courses.index');
    }

    public function destroy($id)
    {
        $course = Course::find($id);

        $course->delete();

        return redirect()->route('courses.index');
    }
}
