<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MateriaprimaPlanilla extends Model
{
    public function materiaprimas()
    {
        return $this->hasMany('App\MateriaPrima', 'id', 'materiaprima_id');
    }

    public function planillas()
    {
        return $this->hasMany('App\Planilla', 'id', 'planilla_id');
    }

    public function stock()
    {
        return $this->belongsTo('App\Stock', 'id', 'id');
    }
}
