<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usager extends Model
{
    use HasFactory;
    public function Usager()
{
    return $this->belongsTo(Usager::class);
}
}
