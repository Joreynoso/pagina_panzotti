<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    public function empleado()
    {
        return $this->belongsTo('App\MPPlanillaIngresoEgreso', 'id', 'empleados_id');
    }
}
