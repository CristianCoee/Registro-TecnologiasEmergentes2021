<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class notas extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'notas';
    protected $fillable = ["Alumno", "materia", "sesion", "profesor", "periodo","actividad1","actividad2","examen","promedio"];
}
