<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formulaire;

class Formulaires extends Controller
{
    public function index()
    {
        $formulaires = Formulaire::all();
        return view('formulaires.index', compact('formulaires'));
    }

    public function create()
    {
        return view('formulaires.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'num_superieur' => 'required|max:255',
            'num_employe' => 'required|max:255',
            'data' => 'required',
            'type_forms' => 'required|max:255',
        ]);

        Formulaire::create($request->all());

        return redirect()->route('formulaires.index')
                        ->with('success', 'Formulaire created successfully.');
    }

    public function show(string $id)
    {
        $formulaire = Formulaire::find($id);
        return view('formulaires.show', compact('formulaire'));
    }

    public function edit(string $id)
    {
        $formulaire = Formulaire::find($id);
        return view('formulaires.edit', compact('formulaire'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'num_superieur' => 'required|max:255',
            'num_employe' => 'required|max:255',
            'data' => 'required',
            'type_forms' => 'required|max:255',
        ]);

        $formulaire = Formulaire::find($id);
        $formulaire->update($request->all());

        return redirect()->route('formulaires.index')
                        ->with('success', 'Formulaire updated successfully.');
    }

    public function destroy(string $id)
    {
        $formulaire = Formulaire::find($id);
        $formulaire->delete();

        return redirect()->route('formulaires.index')
                        ->with('success', 'Formulaire deleted successfully.');
    }
    public function showFirst()
    {
        $formulaire = Formulaire::first();
        if ($formulaire) {
            return view('formulaires.formulaire', compact('formulaire'));  // Changez 'show_first' en 'formulaire'
        } else {
            return redirect()->route('formulaires.index')
                             ->with('error', 'No formulaires found.');
        }
    }
    
}
