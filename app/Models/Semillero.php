<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Semillero extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'titulo',
        'descripcion',
        'imagen'
    ];
}
