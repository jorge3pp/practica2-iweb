<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WikiPage extends Model
{

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function userMany() {
        return $this->belongsToMany('App\User');
    }

    public function repositorio() {
        return $this->belongsTo('App\Repositorio');
    }

    public function wiki() {
        return $this->belongsTo('App\Wiki');
    }
}
