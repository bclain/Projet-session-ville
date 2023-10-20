<?php
use App\Http\Controllers\UsagersController;
use App\Http\Controllers\ProceduresController;
use App\Http\Controllers\NotificationsController;
use App\Http\Controllers\FormulairesController;
use App\Http\Controllers\DepartementsController;
use App\Http\Controllers\FormulaireSoumisController;
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
Route::get('/notifications', [Notifications::class, 'index']);
Route::post("/login",[UsagersController::class,'login']);
Route::get('/accueil',[UsagersController::class,'show'])->name('users.index');

Route::get('/formulaires/accident-de-travail', [FormulairesController::class, 'showAccidentDeTravail']);

Route::get('/formulaire-soumis/{id}', [FormulaireSoumisController::class, 'show']);



//deconnexion
Route::get('/deconnexion', function () {
    Session::forget('usager');
    return redirect('/login');
    
});
