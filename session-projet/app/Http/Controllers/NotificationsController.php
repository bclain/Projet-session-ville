<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Notification;
use App\Models\Usager;
use App\Models\FormulaireSoumis;
use App\Models\Formulaire;

class NotificationsController extends Controller
{
    public function show(string $id)
    {
        $notification = Notification::find($id);
        return view('notifications.show', compact('notification'));
    }

}
