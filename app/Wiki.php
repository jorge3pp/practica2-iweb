<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wiki extends Model
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

    public function wikiPages() {
        return $this->hasMany('App\WikiPage');
    }
}
