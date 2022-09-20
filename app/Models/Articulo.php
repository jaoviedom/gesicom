<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    use SoftDeletes;
    protected $fillable = [
        "titulo",
        "revista",
        "resumen",
        "enlace",
        "issn",
        "doi",
        "anio",
        "mes",
        "proyecto_id"
    ];
}
