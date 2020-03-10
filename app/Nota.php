<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
 //query scopes (buscador)
 public function scopeOrdenarpor($query, $tipo) {

    if ( $tipo == 'mas recientes') {
        return $query->where();
        }
    }

    //tarea terminado
    public function scopeTerminado($query){

        return $query->where('terminado','1');
    }

    //tarea sin terminar
    public function scopeSinterminar($query){

        return $query->where('terminado','0');
    }
}


