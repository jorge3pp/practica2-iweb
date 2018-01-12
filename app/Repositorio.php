<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repositorio extends Model
{
    public function agente() {
        return $this->belongsTo('App\Agente');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function userMany() {
        return $this->belongsToMany('App\User');
    }
}
