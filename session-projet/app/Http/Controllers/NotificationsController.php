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
    public function index()
    {
        $notifications = Notification::all();
        

        return view('notifications.show', compact('notifications'));
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

    public function show(string $id)
    {
        $notification = Notification::find($id);
        return view('notifications.show', compact('notification'));
    }


    public function destroy(string $id)
    {
        $notification = Notification::find($id);
        $notification->delete();

        return redirect()->route('notifications.index')
                        ->with('success', 'Notification deleted successfully.');
    }
}
