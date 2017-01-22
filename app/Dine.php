<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dine extends Model
{
    public function getTag(){
        return $this->hasMany('App\Tag', 'did', 'id');
    }

    public function user(){
        return $this->belongsTo('App\User','auth0id','uid');
    }
}
