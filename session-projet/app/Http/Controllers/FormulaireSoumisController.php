<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormulaireSoumis;

class FormulaireSoumisController extends Controller
{

    public function show(string $id)
    {
        $formulaireSoumis = FormulaireSoumis::find($id);
        
        if (!$formulaireSoumis) {
            // Ici, vous pouvez rediriger vers une page d'erreur ou une autre page si le formulaire n'est pas trouvé
            return redirect()->route('users.index') //erreur 
                             ->with('error', "Aucun formulaire trouvé");
        }
        
        return view('formulaires.formulaire_soumis', compact('formulaireSoumis'));
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
