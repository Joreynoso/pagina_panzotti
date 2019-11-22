<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public function receta()
    {
        return $this->hasOne('App\Receta', 'id', 'receta_id');
    }
}
