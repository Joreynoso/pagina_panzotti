<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MateriaprimaReceta extends Model
{
    public function materiaprimas()
    {
        return $this->hasMany('App\MateriaPrima', 'id', 'materiaprima_id');
    }

    public function recetas()
    {
        return $this->hasMany('App\Receta', 'id', 'receta_id');
    }

    public function stock()
    {
        return $this->belongsTo('App\Stock', 'id', 'id');
    }
}
