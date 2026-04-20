<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();

        return view('teachers.index', compact('teachers'));
    }

    public function store(Request $request)
    {
        $teacher = new Teacher();
        $teacher->name = $request->name;
        $teacher->address = $request->address;
        $teacher->city = $request->city;

        $teacher->save();

        return redirect()->route('teachers.index');
    }

    public function edit($id)
    {
        $teacher = Teacher::find($id);

        return view('teachers.edit', compact('teacher'));
    }

    public function update(Request $request, $id)
    {
        $teacher = Teacher::find($id);
        $teacher->name = $request->name;
        $teacher->address = $request->address;
        $teacher->city = $request->city;

        $teacher->save();

        return redirect()->route('teachers.index');
    }

    public function destroy($id)
    {
        $teacher = Teacher::find($id);

        $teacher->delete();

        return redirect()->route('teachers.index');
    }
}
