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
use Illuminate\Support\Facades\DB;


class FormulairesController extends Controller
{
    //Important ++




    public function showAccidentDeTravail(Request $req,string $id)
    {
        if($req->session()->has('usager'))  //IMMPORTANT verification 
        {

        $formulaire = Formulaire::find($id); 
        $user_id= Session::get('usager')['id'];      
        $notifications = DB::table('notifications')
        ->where('notifications.id_user',$user_id)
        ->join('formulairesoumis','notifications.id_formulaire_soumis','=','formulairesoumis.id')     
        ->join('usagers','formulairesoumis.num_employe','=','usagers.id')
        ->select('formulairesoumis.*','usagers.*','notifications.*')
        ->get();
        
        if ($formulaire) {

            return view('formulaires.formulaire', compact('formulaire','notifications'));  // Assuming you have a view named 'show_accident'
        } else {
            return redirect()->route('usagers.show') //erreur 
                             ->with('error', 'No "Accident de travail" form found.');
        }
    }
    else
        {
            return redirect('/connexion');
        }
    }

    public function create(Request $req)
    {
        if($req->session()->has('usager'))  //IMMPORTANT verification 
        {
        $user_id= Session::get('usager')['id'];      
        $notifications = DB::table('notifications')
        ->where('notifications.id_user',$user_id)
        ->join('formulairesoumis','notifications.id_formulaire_soumis','=','formulairesoumis.id')     
        ->join('usagers','formulairesoumis.num_employe','=','usagers.id')
        ->select('formulairesoumis.*','usagers.*','notifications.*')
        ->get();
        return View('formulaires.ajoutFormulaire',compact('notifications'));
        }
        else
        {
            return redirect('/connexion');
        }
    }
}