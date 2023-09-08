<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departement;

class Departements extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departements = Departement::all();
        return view('departements.index', compact('departements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('departements.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom_departement' => 'required|max:255',
        ]);

        Departement::create($request->all());

        return redirect()->route('departements.index')
                        ->with('success', 'Departement created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $departement = Departement::find($id);
        return view('departements.show', compact('departement'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $departement = Departement::find($id);
        return view('departements.edit', compact('departement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nom_departement' => 'required|max:255',
        ]);

        $departement = Departement::find($id);
        $departement->update($request->all());

        return redirect()->route('departements.index')
                        ->with('success', 'Departement updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $departement = Departement::find($id);
        $departement->delete();

        return redirect()->route('departements.index')
                        ->with('success', 'Departement deleted successfully.');
    }
}
