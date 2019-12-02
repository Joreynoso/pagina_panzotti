<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    public function producto()
    {
        return $this->belongsTo('App\Producto', 'id', 'producto_id');
    }

    public function materiaprimas()
    {
        return $this->belongsToMany('App\MateriaPrima', 'id', 'materiaprima_id')->withTimestamps();
    }
}
