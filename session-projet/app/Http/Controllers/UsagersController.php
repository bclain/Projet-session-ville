<?php

namespace App\Http\Controllers;
use App\models\Usager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

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
            return redirect('/login');
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
            return redirect('/');
        }
        else{
            $req->session()->put('usager',$usager);
            return redirect('/');
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
    public function show(string $id)
    {
        //
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
