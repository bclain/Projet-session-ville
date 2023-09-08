<?php

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
use App\Http\Controllers\Departements;
use App\Http\Controllers\Formulaires;
use App\Http\Controllers\Notifications;
use App\Http\Controllers\Procedures;
use App\Http\Controllers\Usagers;

use App\Models\Departement;
use App\Models\Formulaire;
use App\Models\Notification;
use App\Models\Procedure;
use App\Models\Usager;


Route::get('/connexion', function () {
    return view('users.connexion');
});
Route::get('/first-formulaire', [Formulaires::class, 'showFirst']);
Route::get('/notifications', [Notifications::class, 'index']);

Route::get('/notifications', function () {
    $notifications = Notification::all();
    return view('users.notifications', compact('notifications'));
});

Route::get('/ajoutFormulaire', function () {
    return view('formulaires.ajoutFormulaire');
});
Route::get('/', function () {
    return view('users.index');
});
