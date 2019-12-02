<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MateriaPrima extends Model
{
    public function proveedor()
    {
        return $this->hasOne('App\Proveedor', 'id', 'proveedor_id');
    }

    public function tipomp()
    {
        return $this->hasOne('App\TipoMateriaPrima', 'id', 'tipomateriaprima_id');
    }

    public function recetas()
    {
        return $this->belongsToMany('App\Receta', 'id', 'receta_id')->withTimestamps();
    }


}
