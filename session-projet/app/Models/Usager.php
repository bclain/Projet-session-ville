<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Notification;

class Usager extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'num_superieur', 'position', 'droit_employe', 'droit_superieur', 'droit_admin'];
    public function usager(){
        return $this->belongdToMany('app\Models\Notification');
    }
}

