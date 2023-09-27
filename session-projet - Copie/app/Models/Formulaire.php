<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulaire extends Model
{
    use HasFactory;

    protected $fillable = ['num_superieur', 'num_employe', 'data', 'type_forms'];
    protected $casts = [
        'data' => 'array',
    ];
    
}

