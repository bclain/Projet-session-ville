<?php
use App\Http\Controllers\UsagersController;
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

Route::get('/login', function () {
    return view('users.connexion');
});
Route::get('/', function () {
    return view('users.index');
});
Route::get('/connexion', function () {
    return view('users.connexion');
});
Route::get('/notifications', function () {
    return view('users.notifications');
});
Route::get('/ajoutFormulaire', function () {
    return view('formulaires.ajoutFormulaire');
});
Route::get('/formulaires', function () {
    return view('formulaires.formulaire');
});
Route::post("/login",[UsagersController::class,'login']);
Route::get('/home',[UsagersController::class,'show']);  //modifier cette ligne pour pouvoir rediriger apres la connexion 
