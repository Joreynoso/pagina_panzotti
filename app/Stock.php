<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    public function materiaprimaplanillas()
    {
        return $this->hasOne('App\MateriaprimaPlanilla', 'id', 'id');
    }

    public function materiaprimarecetas()
    {
        return $this->hasOne('App\MateriaprimaReceta', 'id', 'id');
    }
}
