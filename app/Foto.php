<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    public function producto()
    {
        return $this->hasOne('App\Producto', 'id', 'producto_id');
    }

}
