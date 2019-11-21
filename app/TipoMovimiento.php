<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoMovimiento extends Model
{
    public function tipomovimiento()
    {
        return $this->belongsTo('App\MPPlanillaIngresoEgreso', 'id', 'tipo_movimientos_id');
    }
}
