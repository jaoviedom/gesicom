<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InvestigadorProyecto extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'proyecto_id',
        'investigador_id'
    ];
}
