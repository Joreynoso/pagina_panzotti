<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductoPrecio extends Model
{
    public function producto()
    {
        return $this->hasOne('App\Producto', 'id', 'producto_id');
    }
}
