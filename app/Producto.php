<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public function receta()
    {
        return $this->hasOne('App\Receta', 'id', 'receta_id');
    }

    public function foto()
    {
        return $this->belongsTo('App\Foto', 'id', 'foto_id');
    }

    public function productoprecio()
    {
        return $this->belongsTo('App\ProductoPrecio', 'id', 'productoprecio_id');
    }

    public function ventas()
    {
        return $this->belongsToMany('App\Venta', 'id', 'venta_id')->withTimestamps();
    }
}
