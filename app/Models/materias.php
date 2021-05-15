<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
//use Illuminate\Database\Eloquent\Factories\HasFactory

class materias extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'materias';
    protected $fillable = ["codigo", "materia"];
}