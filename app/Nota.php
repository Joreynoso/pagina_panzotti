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
}


