<?php
use App\Http\Controllers\UsagersController;
use App\Http\Controllers\FormulairesController;
use Illuminate\Support\Facades\Route;

Route::view('/connexion', 'users.connexion')->name('connexion');

Route::middleware(['auth'])->group(function () {
    Route::get('/notifications', [NotificationsController::class, 'index'])->name('notifications.index');
    Route::get('/formulaires/accident-de-travail', [FormulairesController::class, 'showAccidentDeTravail'])->name('formulaires.accident');
    Route::get('/home', [UsagersController::class, 'show'])->name('home');
    Route::get('/deconnexion', [UsagersController::class, 'logout'])->name('logout');
});
