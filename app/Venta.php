<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    public function cliente()
    {
        return $this->hasOne('App\Cliente', 'id', 'cliente_id');
    }
}
