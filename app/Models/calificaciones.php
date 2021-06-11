<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
//use Illuminate\Database\Eloquent\Factories\HasFactory

class calificaciones extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'calificaciones';
    protected $fillable = ["alumno","grado","profesor", "periodo","matematicas","lenguaje","sociales","ciencia"];
}