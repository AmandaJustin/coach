<?php

namespace App\Http\Controllers;

use App\Models\Coach;
use Illuminate\Http\Request;

class CoachController extends Controller
{
    
    public function index()
{
    $coaches = Coach::all();
    return view('coach.index', compact('coaches'));
}

public function create()
{
    return view('Coach.create');
}

public function store(Request $request)
{
    Coach::create($request->all());
    return redirect('coach')->with('success', 'Coach created successfully.');
}

public function edit($id)
{
    $coaches = Coach::findOrFail($id);
    return view('coach.edit', compact('coach'));
}

public function update(Request $request, $id)
{
    $coaches = Coach::findOrFail($id);
    $coaches->update($request->all());
    return redirect('coach')->with('success', 'Coach updated successfully.');
}

public function destroy($id)
{
    $coaches = Coach::findOrFail($id);
    $coaches->delete();
    return redirect('coach')->with('success', 'Coach deleted successfully.');
}
}
