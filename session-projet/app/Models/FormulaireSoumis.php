<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormulaireSoumis extends Model
{
    use HasFactory;

    protected $fillable = ['data', 'type_forms', 'dg'];
    protected $casts = [
        'data' => 'array',
    ];
}
