<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Planilla extends Model
{
    public function tipomovimiento()
    {
        return $this->hasOne('App\TipoMovimiento', 'id', 'tipomovimiento_id');
    }

    public function usuario()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }

    public function materiaprima()
    {
        return $this->hasOne('App\MateriaPrima', 'id', 'materiaprima_id');
    }

    //query scopes (buscador)
    public function scopeBuscarpor($query, $tipo, $buscar) {
    	if ( ($tipo) && ($buscar) ) {
    		return $query->where($tipo,'like',"%$buscar%");
    	}
    }

}
