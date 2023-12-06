<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Usager;
use App\Models\Notification;
use App\Models\FormulaireSoumis;
use App\Models\Formulaire;
use App\Models\Procedure;

class ProceduresController extends Controller
{
    public function create(request $req)
    {
        if($req->session()->has('usager'))  //IMMPORTANT verification 
        {
        $procedures = Procedure::all();
        $user_id= Session::get('usager')['id'];      
        $notifications = DB::table('notifications')
        ->where('notifications.id_user',$user_id)
        ->join('formulairesoumis','notifications.id_formulaire_soumis','=','formulairesoumis.id')     
        ->join('usagers','formulairesoumis.num_employe','=','usagers.id')
        ->select('formulairesoumis.*','usagers.*','notifications.*')
        ->get();
        return View('formulaires.ajoutProcedure',compact('notifications'));
        }
        else
        {
            return redirect('/connexion');
        }
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

    public function destroy($id)
    {
        // Vérifie si la session 'usager' existe
        if(!Session::has('usager')) {
            return redirect('/connexion');
        }
    
        // Récupère les informations de l'usager depuis la session
        $user = Session::get('usager');
    
        // Vérifie si l'usager est un administrateur
        $isAdmin = isset($user['droit_admin']) && $user['droit_admin'] == 'o';
    
        if(!$isAdmin) {
            // Si l'usager n'est pas administrateur, redirige vers une autre page ou affiche une erreur
            return redirect()->route('some_route_name')->with('error', 'Accès non autorisé.');
        }
    
        // La logique de suppression de la procédure
        $procedure = Procedure::findOrFail($id);
        $procedure->delete();
    
        return redirect()->route('usagers.show')
        ->with('success', 'Procedure supprimée.');
    }
}
