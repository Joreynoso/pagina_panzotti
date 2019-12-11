<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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

     //query scopes (buscador)
     public function scopeBuscarpor($query, $tipo, $buscar) {

    	if ( ($tipo) && ($buscar) ) {

    		return $query->where($tipo,'like',"%$buscar%");
    	}
    }

    //query scopes (buscador)
    public function scopeClientepedido($query, $buscar) {

    	if ( $buscar !='' ) {

            return $query->where('users.name','like',"%$buscar%")
            ->join('ventas', 'ventas.id', '=', 'producto_ventas.venta_id')
            ->join('users', 'users.id', '=', 'ventas.user_id');
    	}
    }

}
