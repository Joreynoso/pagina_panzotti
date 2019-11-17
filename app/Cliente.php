<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public function comentario(){

        return $this->hasMany(Comentario::class);
    }
}
