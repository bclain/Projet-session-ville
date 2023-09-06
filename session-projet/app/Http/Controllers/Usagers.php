<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usager;

class Usagers extends Controller
{
    public function index()
    {
        $usagers = Usager::all();
        return view('usagers.index', compact('usagers'));
    }

    public function create()
    {
        return view('usagers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|max:255',
            'num_superieur' => 'required|max:255',
            'position' => 'required|max:255',
            'droit_employe' => 'required|max:255',
            'droit_superieur' => 'required|max:255',
            'droit_admin' => 'required|max:255',
        ]);

        Usager::create($request->all());

        return redirect()->route('usagers.index')
                        ->with('success', 'Usager created successfully.');
    }

    public function show(string $id)
    {
        $usager = Usager::find($id);
        return view('usagers.show', compact('usager'));
    }

    public function edit(string $id)
    {
        $usager = Usager::find($id);
        return view('usagers.edit', compact('usager'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nom' => 'required|max:255',
            'num_superieur' => 'required|max:255',
            'position' => 'required|max:255',
            'droit_employe' => 'required|max:255',
            'droit_superieur' => 'required|max:255',
            'droit_admin' => 'required|max:255',
        ]);

        $usager = Usager::find($id);
        $usager->update($request->all());

        return redirect()->route('usagers.index')
                        ->with('success', 'Usager updated successfully.');
    }

    public function destroy(string $id)
    {
        $usager = Usager::find($id);
        $usager->delete();

        return redirect()->route('usagers.index')
                        ->with('success', 'Usager deleted successfully.');
    }
}
