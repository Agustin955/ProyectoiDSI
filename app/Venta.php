<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    public function especie(){
        
        return $this->belongsTo(Especie::class);
    }
}
