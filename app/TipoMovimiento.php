<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoMovimiento extends Model
{
    public function tipomovimiento()
    {
        return $this->belongsTo('App\Planilla', 'id', 'tipo_movimientos_id');
    }
}
