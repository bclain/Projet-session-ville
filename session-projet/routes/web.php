<?php
use App\Http\Controllers\UsagersController;
use App\Http\Controllers\ProceduresController;
use App\Http\Controllers\NotificationsController;
use App\Http\Controllers\FormulairesController;
use App\Http\Controllers\DepartementsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Models\Departement;
use App\Models\Formulaire;
use App\Models\Notification;
use App\Models\Procedure;
use App\Models\Usager;


Route::get('/connexion', function () {
    return view('users.connexion');
});
Route::get('/acceuil', function () { //modif
    return view('users.index');
});
Route::get('/first-formulaire', [FormulairesController::class, 'showFirst']);

Route::get('/notifications', function () {
    $notifications = Notification::all();
    return view('users.notifications', compact('notifications'));
});

Route::get('/ajoutFormulaire', function () {
    return view('formulaires.ajoutFormulaire');
});
Route::post("/login",[UsagersController::class,'login']);
Route::get('/home',[UsagersController::class,'show']);  //modifier cette ligne pour pouvoir rediriger apres la connexion 

Route::get('/formulaires/accident-de-travail', [FormulairesController::class, 'showAccidentDeTravail']);


//deconnexion
Route::get('/deconnexion', function () {
    Session::forget('usager');
    return redirect('/login');
    
});
