<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'apellido',
        'domicilio',
        'tel',
        'email',
        'password',
        'is_empleado'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function venta()
    {
        return $this->belongsTo('App\Venta', 'id', 'user_id');
    }

    //query scopes (buscador)
    public function scopeBuscarpor($query, $tipo, $buscar) {
    	if ( ($tipo) && ($buscar) ) {
    		return $query->where($tipo,'like',"%$buscar%");
    	}
    }

    public function scopeIsempleado($query){

        return $query->where('is_empleado','0');
    }

    public function scopeIsadmin($query){

        return $query->where('is_admin','0');
    }

    public function scopeEmpleado($query){

        return $query->where('is_empleado','1');
    }
}
