<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;
use App\Models\Usager;
use App\Models\Formulaire;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class NotificationsController extends Controller
{
    public function index()
    {
        $notifications = Notification::all();
        return view('notifications.index', compact('notifications'));
    }    

    public function create()
    {
        return view('notifications.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_user' => 'required|exists:usagers,id',
            'data' => 'required',
            'vu' => 'required|boolean',
        ]);

        Notification::create($request->all());

        return redirect()->route('notifications.index')
                        ->with('success', 'Notification created successfully.');
    }

    public function show(Notification $notif, Request $req ) 
    {
        $user_id= Session::get('usager')['id'];
        $notifications = Notification::where('id_user',$user_id)->get();
        return view('formulaires.show', compact('notif','notifications'));

    }

   

    public function update(Request $request, string $id)
    {
        $request->validate([
            'id_user' => 'required|exists:usagers,id',
            'data' => 'required',
            'vu' => 'required|boolean',
        ]);

        $notification = Notification::find($id);
        $notification->update($request->all());

        return redirect()->route('notifications.index')
                        ->with('success', 'Notification updated successfully.');
    }

    
}
