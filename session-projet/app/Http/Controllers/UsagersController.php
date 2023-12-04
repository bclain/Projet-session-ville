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


class UsagersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Usager $usager, Request $req)
    {
        if($req->session()->has('usager'))  //IMMPORTANT verification 
        {
            $usagers=Usager::all();
            return view('users.connexion',compact('usagers'));
        }
        else
        {
            return redirect('/');
        } 
    }
    function login(Request $req)
    {
        $req->validate([
            'nom'=>'required',          
            'password'=>'required',
        ]); 
        $usager =Usager::where(['nom'=>$req->nom])->first();
        if(! $usager || ! Hash::check($req->password,$usager->password))
        {
            return redirect('/connexion');
        }
        else{
            $req->session()->put('usager',$usager);
            return redirect('/accueil'); //redirection apres connection
        }
    }
    public function logout(Request $request)
    {
        $request->session()->forget('usager');
        return redirect('/connexion');
    }   
    public function show(Request $req)
    {
        if($req->session()->has('usager'))  //IMMPORTANT verification 
        {

        $procedures = Procedure::all();
        $formulaire = Formulaire::all();
        $user_id= Session::get('usager')['id'];      
        $notifications = DB::table('notifications')
        ->where('notifications.id_user',$user_id)
        ->join('formulairesoumis','notifications.id_formulaire_soumis','=','formulairesoumis.id')     
        ->join('usagers','formulairesoumis.num_employe','=','usagers.id')
        ->select('formulairesoumis.*','usagers.*','notifications.*')
        ->get();
        return View('users.index',compact('notifications','procedures','formulaire'));
        }
        else
        {
            return redirect('/connexion');
        } 
    }
   
}
