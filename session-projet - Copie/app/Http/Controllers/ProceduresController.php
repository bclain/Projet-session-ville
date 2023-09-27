<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Procedure;

class ProceduresController extends Controller
{
    public function index()
    {
        $procedures = Procedure::all();
        return view('procedures.index', compact('procedures'));
    }

    public function create()
    {
        return view('procedures.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|max:256',
            'liens' => 'required|max:2000',
        ]);

        Procedure::create($request->all());

        return redirect()->route('procedures.index')
                        ->with('success', 'Procedure created successfully.');
    }

    public function show(string $id)
    {
        $procedure = Procedure::find($id);
        return view('procedures.show', compact('procedure'));
    }

    public function edit(string $id)
    {
        $procedure = Procedure::find($id);
        return view('procedures.edit', compact('procedure'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nom' => 'required|max:256',
            'liens' => 'required|max:2000',
        ]);

        $procedure = Procedure::find($id);
        $procedure->update($request->all());

        return redirect()->route('procedures.index')
                        ->with('success', 'Procedure updated successfully.');
    }

    public function destroy(string $id)
    {
        $procedure = Procedure::find($id);
        $procedure->delete();

        return redirect()->route('procedures.index')
                        ->with('success', 'Procedure deleted successfully.');
    }
}
