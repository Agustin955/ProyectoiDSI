<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zona extends Model
{
    protected $fillable = [
        'id', 'nombre', 'descripcion','updated_at','created_at'
    ];
}
