<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;
use App\Models\Filiere;
use App\Models\User;

class EtudiantController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        if ($user) {
            $etudiants = $user->etudiants;
            if (auth()->check() && auth()->user()->type === 'Administratif') {
                return view('etudiants.index', compact('etudiants'));
            } else {
                return view('etudiants.index1', compact('etudiants'));
        }} else {
            return redirect()->route('login')->with('error', 'Please log in to view etudiants.');
        }
    }

    public function create()
    {
        if (auth()->check() && auth()->user()->type === 'Administratif') {
        $filieres = Filiere::all();
        $users = User::all();
        return view('etudiants.create', compact('filieres', 'users'));
        }
        else {
            return view('etudiants.error');
        }}



    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'sexe' => 'required|string|max:10',
            'filiere_id' => 'required|exists:filieres,id',
        ]);

        $user = auth()->user();
        if (!$user) {
            return redirect()->route('login')->with('error', 'Please log in to create an etudiant.');
        }

        $etudiant = new Etudiant([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'sexe' => $request->sexe,
            'filiere_id' => $request->filiere_id,
            'user_id' => $user->id,
        ]);

        $etudiant->save();

        return redirect()->route('etudiants.index')->with('success', 'Etudiant created successfully');
    }

    public function show($id)
    {
        $etudiant = Etudiant::findOrFail($id);
        return view('etudiants.show', compact('etudiant'));
    }

    public function edit($id)
    {
        if (auth()->check() && auth()->user()->type === 'Administratif') {

        $etudiant = Etudiant::findOrFail($id);
        $filieres = Filiere::all();
        return view('etudiants.edit', compact('etudiant', 'filieres'));
        }else {
            return view('etudiants.error');
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'sexe' => 'required|string|max:10',
            'filiere_id' => 'required|exists:filieres,id',
        ]);

        $etudiant = Etudiant::findOrFail($id);

        $etudiant->update([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'sexe' => $request->sexe,
            'filiere_id' => $request->filiere_id,
        ]);

        return redirect()->route('etudiants.index')->with('success', 'Etudiant updated successfully');
    }

    public function destroy($id)
    {
        if (auth()->check() && auth()->user()->type === 'Administratif') {
        Etudiant::findOrFail($id)->delete();
        return redirect()->route('etudiants.index')->with('success', 'Etudiant deleted successfully');

    }else {
        return view('etudiants.error');
    }}
}
