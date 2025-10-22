<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class evento extends Model
{
    protected $fillable=[ 'nombre','descripcion','fecha y hora inicio', 'fecha y hora fin'];
}
