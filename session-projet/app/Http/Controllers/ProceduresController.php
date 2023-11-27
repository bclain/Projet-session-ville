<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Procedure;

class ProceduresController extends Controller
{
   

    public function create()
    {
        return view('formulaires.ajoutProcedure');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|max:256',
            'liens' => 'required|max:2000',
        ]);

        Procedure::create($request->all());

        return redirect()->route('usagers.show')
                        ->with('success', 'Procedure created successfully.');
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

        return 'test';
    }

    public function destroy(string $id)
    {
        $procedure = Procedure::find($id);
        $procedure->delete();

        return 'test';
    }
}
