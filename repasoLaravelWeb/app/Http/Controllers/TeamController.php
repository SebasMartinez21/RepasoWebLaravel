<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::all();

        return view('teams.index', compact('teams'));
    }

    public function store(Request $request)
    {
        $team = new Team();
        $team->name = $request->name;
        $team->created_date = $request->created_date;
        $team->is_active = $request->is_active;

        $team->save();

        return redirect()->route('teams.index');
    }

    public function edit($id)
    {
        $team = Team::find($id);

        return view('teams.edit', compact('team'));
    }

    public function update(Request $request, $id)
    {
        $team = Team::find($id);
        $team->name = $request->name;
        $team->created_date = $request->created_date;
        $team->is_active = $request->is_active;

        $team->save();

        return redirect()->route('teams.index');
    }

    public function destroy($id)
    {
        $team = Team::find($id);
        $team->delete();    

        return redirect()->route('teams.index');
    }
}
