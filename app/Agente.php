<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Agente extends Model
{
    public function cuartel() {
        return $this->belongsTo('App\Cuartel');
    }

    public function denuncia() {
        return $this->hasMany('App\Denuncia');
    }

    public function tarea() {
        return $this->belongsToMany('App\Tarea');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }
}
