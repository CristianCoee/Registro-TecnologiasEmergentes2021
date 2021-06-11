<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class profesores extends Eloquent
{
   // use HasFactory;
   protected $connection = 'mongodb';
    protected $collection = 'profesores';
    protected $fillable = ["nombre", "apellido", "sexo", "tel", "cel", "usuario", "clave", "curso", "activo"];
}
