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
}
