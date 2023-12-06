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

    public function store(Request $request)
    {
        $user_id= Session::get('usager')['id'];
        // Récupérez les données JSON du formulaire soumis
        $data = $request->json()->all();
        $userId = $request->session()->get('usager')['id'];
        $userSupp = $request->session()->get('usager')['num_superieur'];
    
        // Créez une nouvelle instance de votre modèle et remplissez les champs
        $formulaire = new Formulaire();
        
        $formulaire->type_forms = $data['type_formulaire'];
        $formulaire->dg = 0; // Assurez-vous que le champ 'dg' est inclus dans votre JSON
        $jsonData = json_encode(['fields' => $data['fields']]);
        $formattedJson = json_decode($jsonData, true, 512, JSON_PRETTY_PRINT);
        $formulaire->data = $formattedJson; // Utilisez le champ 'fields' pour le champ 'data' comme exemple
    
        // Enregistrez le formulaire soumis dans la base de données
        $formulaire->save();

        // Redirigez l'utilisateur vers la page souhaitée avec un message de succès
        return redirect('/accueil'); //redirection apres connection
    }

    public function destroy($id)
    {
        if(!Session::has('usager') || Session::get('usager')['droit_admin'] != 'o') {
            return redirect('/connexion');
        }

        $formulaire = Formulaire::find($id);
        if (!$formulaire) {
            return redirect()->route('usagers.show')->with('error', 'Formulaire non trouvé.');
        }

        $formulaire->delete();

        return redirect()->route('usagers.show')->with('success', 'Formulaire supprimé avec succès.');
    }
}