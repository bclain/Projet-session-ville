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




Route::get('/accueil',          [UsagersController::class,'show'])              ->name('usagers.show');
Route::get('/notifications',    [NotificationsController::class, 'index'])      ->name('notifications.index');

Route::get('/creerProcedure',   [ProceduresController::class,'create'])         ->name('procedures.create');
Route::post('/creerProcedure',  [ProceduresController::class,'store'])          ->name('procedures.store');

Route::post('/connexion',       [UsagersController::class,'login'])             ->name('usagers.login');
Route::get('/connexion',        [UsagersController::class, 'showLoginForm'])    ->name('usagers.showLoginForm');
Route::get('/deconnexion',      [UsagersController::class, 'logout'])           ->name('usagers.logout');

Route::get('/formulaires/{id}',  [FormulairesController::class, 'showAccidentDeTravail']);

Route::post('/formulaire-soumis/soumission', [FormulaireSoumisController::class, 'store'])->name('formulaire.submit');
Route::get('/formulaire-soumis/{id}',  [FormulaireSoumisController::class, 'show']) ->name('formulairesSoumis.show');
Route::redirect('/home', '/accueil');
Route::redirect('/', '/accueil');

//modifier le statut de la notif 

Route::patch('/updatenotif/{not}', [FormulaireSoumisController::class, 'updatenotif'])
    ->name('notification.updateNot');

