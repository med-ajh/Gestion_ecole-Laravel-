<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filiere;

class FiliereController extends Controller
{
    public function index()
    {
        $filieres = Filiere::all();
        if (auth()->check() && auth()->user()->type === 'Administratif') {
        return view('filieres.index', compact('filieres'));
        }else {
        return view('filieres.index1', compact('filieres'));
    }
    }

    public function create()
    {
        if (auth()->check() && auth()->user()->type === 'Administratif') {
        return view('filieres.create');
    }   else {
        return view('filieres.error');
    }}

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
        ]);

        Filiere::create([
            'nom' => $request->nom,
        ]);

        return redirect()->route('filieres.index')->with('success', 'Filiere created successfully');
    }

    public function show($id)
    {
        $filiere = Filiere::findOrFail($id);
        return view('filieres.show', compact('filiere'));
    }

    public function edit($id)
    {
        if (auth()->check() && auth()->user()->type === 'Administratif') {
        $filiere = Filiere::findOrFail($id);
        return view('filieres.edit', compact('filiere'));
    }   else {
        return view('filieres.error');
    }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
        ]);

        $filiere = Filiere::findOrFail($id);

        $filiere->update([
            'nom' => $request->nom,
        ]);

        return redirect()->route('filieres.index')->with('success', 'Filiere updated successfully');
    }

    public function destroy($id)
    {
        if (auth()->check() && auth()->user()->type === 'Administratif') {
        Filiere::findOrFail($id)->delete();
        return redirect()->route('filieres.index')->with('success', 'Filiere deleted successfully');
    }   else {
        return view('filieres.error');
    }}
}
