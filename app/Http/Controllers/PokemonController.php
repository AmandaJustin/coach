<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use App\Models\Coach;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function index()
{
    $pokemons = Pokemon::all();
    return view('pokemon.index', compact('pokemons'));
}

public function create()
{
    $coaches = Coach::all();
    return view('pokemon.create', compact('coaches'));

}

public function store(Request $request)
{
    Pokemon::create($request->all());
    return redirect('pokemon')->with('success', 'Pokemon created successfully.');
}

public function edit($id)
{
    $pokemon = Pokemon::findOrFail($id);
    return view('pokemon.edit', compact('pokemon'));
}

public function update(Request $request, $id)
{
    $pokemon = Pokemon::findOrFail($id);
    $pokemon->update($request->all());
    return redirect('pokemon')->with('success', 'Pokemon updated successfully.');
}

public function destroy($id)
{
    $pokemon = Pokemon::findOrFail($id);
    $pokemon->delete();
    return redirect('pokemon')->with('success', 'Pokemon deleted successfully.');
}
}
