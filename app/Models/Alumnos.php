<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Alumnos extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'alumnos';

}
