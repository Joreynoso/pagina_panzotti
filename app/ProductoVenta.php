<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductoVenta extends Model
{
    public function productos()
    {
        return $this->hasMany('App\Producto', 'id', 'producto_id');
    }

    public function ventas()
    {
        return $this->hasMany('App\Venta', 'id', 'venta_id');
    }
}
