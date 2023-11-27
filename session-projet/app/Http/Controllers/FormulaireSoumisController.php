<?php

namespace App\Http\Controllers;

use App\Models\FormulaireSoumis; // Assurez-vous d'importer le modèle approprié
use App\Models\Usager;
use App\Models\Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class FormulaireSoumisController extends Controller
{

    public function show(string $id,Notification $notif)
    {  
        $user_id= Session::get('usager')['id'];
        $notifications = Notification::where('id_user',$user_id)->get();
            return view('formulaires.formulaire_soumis', compact('notif','notifications'));
    }
    
    public function NotifNot()
    {
        $user_id= Session::get('usager')['id'];
        $notifications = Notification::where('id_user',$user_id)->get();
        return View('formulaires.formulaire_soumis',compact('notifications'));
        
        
    }

    
    public function store(Request $request)
    {
        // Récupérez les données JSON du formulaire soumis
        $data = $request->json()->all();
        $userId = $request->session()->get('usager')['id'];
        $userSupp = $request->session()->get('usager')['num_superieur'];
    
        // Créez une nouvelle instance de votre modèle et remplissez les champs
        $formulaireSoumis = new FormulaireSoumis();
        $formulaireSoumis->num_superieur = $userSupp; // Utilisez le champ 'type_formulaire' pour 'num_superieur' comme exemple
        $formulaireSoumis->num_employe = $userId; // Remplacez 'num_employe' par le nom de votre champ approprié
        $formulaireSoumis->type_forms = $data['type_formulaire'];
        $formulaireSoumis->dg = 0; // Assurez-vous que le champ 'dg' est inclus dans votre JSON
        $jsonData = json_encode(['fields' => $data['fields']]);
        $formattedJson = json_decode($jsonData, true, 512, JSON_PRETTY_PRINT);
        $formulaireSoumis->data = $formattedJson; // Utilisez le champ 'fields' pour le champ 'data' comme exemple
    
        // Enregistrez le formulaire soumis dans la base de données
        $formulaireSoumis->save();
    
        // Redirigez l'utilisateur vers la page souhaitée avec un message de succès
        return redirect('/accueil'); //redirection apres connection
    }



}
