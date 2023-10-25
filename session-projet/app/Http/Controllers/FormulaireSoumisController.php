<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormulaireSoumis;

class FormulaireSoumisController extends Controller
{

    public function show(string $id)
    {
        $formulaireSoumis = FormulaireSoumis::find($id);
        if ($formulaireSoumis) {
            return view('formulaires.formulaire_soumis', compact('formulaireSoumis'));
        }else{
            return redirect()->route('usagers.show') //erreur 
                             ->with('error', "Aucun formulaire trouvé");
        }
        
    }
}
