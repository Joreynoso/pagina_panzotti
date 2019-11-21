<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    public function mpproveedor()
    {
        return $this->belongsTo('App\MateriaPrima', 'id', 'proveedor_id');
    }
}
