<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormulaireSoumis;
use App\Models\Notification;
use App\Models\Formulaire;
use App\models\Usager;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

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
}
