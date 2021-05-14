<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
//use Illuminate\Database\Eloquent\Factories\HasFactory

class Alumnos extends Eloquent
{
  //  use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'alumnos';
    protected $fillable = ["NIE", "nombrealum", "apellidoalum", "telefonoalum", "sexo",  "fNacimiento", "fIngreso", "direccion", "responsable", "curso", "estado"];
}
