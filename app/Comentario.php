<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    public function cliente(){
        
        return $this->belongsTo(Cliente::class);
    }
}
