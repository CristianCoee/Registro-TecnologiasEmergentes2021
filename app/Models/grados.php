<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class grados extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'grados';
    protected $fillable = ["codigo", "grados", "seccion"];
}
