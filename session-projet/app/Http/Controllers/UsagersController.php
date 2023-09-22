<?php

namespace App\Http\Controllers;
use App\models\Usager;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;


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
    //debut
    function login(Request $req)
    {
        $req->validate([
            'nom'=>'required',          
            'password'=>'required',
        ]); 
        $usager =Usager::where(['nom'=>$req->nom])->first();
        if(! $usager || ! Hash::check($req->password,$usager->password))
        {
            return redirect('/login');
            
        }
        else{
            $req->session()->put('usager',$usager);
            return redirect('/home'); //redirection apres connection
        }
    }
    //fin

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $user_id = Session::get('usager')['id'];
        $notifications = Notification::Where('id_user',$user_id)->get();
        return View('users.index',compact('notifications'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
