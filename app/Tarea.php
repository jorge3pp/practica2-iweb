<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    public function agente() {
        return $this->belongsToMany('App\Agente');
    }
}