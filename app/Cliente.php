<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public function comentario(){

        return $this->hasMany(Comentario::class);
    }

    public function venta()
    {
        return $this->belongsTo('App\Venta', 'id', 'cliente_id');
    }
}
