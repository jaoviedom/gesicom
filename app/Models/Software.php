<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Software extends Model
{
    use SoftDeletes;
    protected $fillable = [
        "titulo",
        "descripcion",
        "anio",
        "proyecto_id"
    ];
}
