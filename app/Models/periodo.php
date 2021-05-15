<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class periodo extends Eloquent
{
   // use HasFactory;
   protected $connection = 'mongodb';
    protected $collection = 'periodo';
    protected $fillable = ["periodo", "dias", "estado", "año"];

    
}
