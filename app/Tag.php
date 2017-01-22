<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function dine(){
        return $this->belongsTo('App/Dine','id','did');
    }
}
