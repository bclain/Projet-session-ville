<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormulaireSoumis extends Model
{
    use HasFactory;

    protected $fillable = ['num_superieur', 'num_employe', 'data', 'type_forms', 'dg', 'confirmation'];
    protected $casts = [
        'data' => 'array',
    ];
}
