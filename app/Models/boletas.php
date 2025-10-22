<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class boletas extends Model
{
    protected $fillable = ['evento', 'localidad', 'valor boleta', 'cantidad boletas'];
}
