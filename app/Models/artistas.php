<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class artistas extends Model
{
    protected $fillable=['nombre','apellido','genero musical','ciudad'];
}
