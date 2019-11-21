<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MPPlanillaIngresoEgreso extends Model
{
    public function tipomovimiento()
    {
        return $this->hasOne('App\TipoMovimiento', 'id', 'tipomovimiento_id');
    }

    public function empleado()
    {
        return $this->hasOne('App\Empleado', 'id', 'empleado_id');
    }
}
