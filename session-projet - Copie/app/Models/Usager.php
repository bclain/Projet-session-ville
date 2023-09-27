<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usager extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'num_superieur', 'position', 'droit_employe', 'droit_superieur', 'droit_admin'];
}

