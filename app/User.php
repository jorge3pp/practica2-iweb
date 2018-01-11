<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'imagen'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function agente() {
        return $this->hasMany('App\Agente');
    }

    public function denuncia() {
        return $this->hasMany('App\Denuncia');
    }

    public function denunciaMany() {
        return $this->belongsToMany('App\Denuncia');
    }
}
