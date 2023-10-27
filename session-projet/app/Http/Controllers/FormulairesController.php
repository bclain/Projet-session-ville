<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formulaire;
use App\models\Usager;
use App\models\Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;


class FormulairesController extends Controller
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
//ca se repete Verification
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
//
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
//Verification 
    public function destroy(string $id)
    {
        $formulaire = Formulaire::find($id);
        $formulaire->delete();

        return redirect()->route('users.index') //erreur 
                        ->with('success', 'Formulaire deleted successfully.');
    }
    //Ne sert a rien 
    public function showFirst()
    {
        $formulaire = Formulaire::first();
        if ($formulaire) {
            return view('formulaires.formulaire', compact('formulaire'));  // Changez 'show_first' en 'formulaire'
        } else {
            return redirect()->route('users.index') //erreur 
                             ->with('error', 'No formulaires found.');
        }
    }
    //Important ++
    public function showAccidentDeTravail()
    {

        $formulaire = Formulaire::where('type_forms', 'Accident de travail')->first();    
        $user_id= Session::get('usager')['id'];
        $notifications = Notification::where('id_user',$user_id)->get();
        
        if ($formulaire) {

            return view('formulaires.formulaire', compact('formulaire','notifications'));  // Assuming you have a view named 'show_accident'
        } else {
            return redirect()->route('users.index') //erreur 
                             ->with('error', 'No "Accident de travail" form found.');
        }
    }
}