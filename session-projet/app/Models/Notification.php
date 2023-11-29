<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\FormulaireSoumis;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = ['id_user', 'id_formulaire_soumis', 'vu'];
    public function formulaires(){
        return $this->belongsToMany('App\Models\FormulaireSoumis');
    }
}
