<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Investigador extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'nombre',
        'descripcion',
        'rol_id',
        'foto'
    ];
}
