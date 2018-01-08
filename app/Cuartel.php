<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Cuartel extends Model
{
    public function agentes() {
        return $this->hasMany('App\Agente');
    }
    /*
    public function prueba() {
        $agentes = Cuartel::find(2)->agentes;
        foreach($agentes as $agente) {
            echo $agente->nombre;
        }
    }
    */
}


